<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Replaces the old phone number (886)-472-5540 with +13128841999 everywhere in the database:
 * schemas (category, product, blog, FAQ), contact settings, blog posts, dynamic pages, etc.
 *
 * Run: php artisan db:seed --class=UpdatePhoneNumberSeeder
 * It first lists what will change and asks for confirmation; only the number text is replaced,
 * and it refuses to run if any JSON-LD schema would become invalid. Safe to run more than once.
 */
class UpdatePhoneNumberSeeder extends Seeder
{
    const NEW_NUMBER = '+13128841999';

    // Every way the old number has been written on the site. Longest first, so "+1(886)-472-5540"
    // is replaced as a whole before the shorter "(886)-472-5540" can match inside it.
    const OLD_NUMBERS = [
        'href="tel:+18005189441">(886)-472-5540',
        '+1 (886) 472-5540',
        '+1(886)-472-5540',
        '+1 (886)-472-5540',
        '+1(886) 472-5540',
        '+1-886-472-5540',
        '+1 886-472-5540',
        '+1 886 472 5540',
        '1 (886) 472-5540',
        '1(886)-472-5540',
        '1-886-472-5540',
        '(886) 472-5540',
        '(886)-472-5540',
        '(886)472-5540',
        '886-472-5540',
        '886.472.5540',
        '886 472 5540',
        '+18864725540',
        '18864725540',
        '8864725540',
    ];

    // Logs of emails already sent stay as they were.
    const SKIP_TABLES = ['email_logs', 'migrations', 'sessions', 'password_resets', 'failed_jobs', 'jobs'];

    public function run()
    {
        $replacements = [];
        foreach (self::OLD_NUMBERS as $old) {
            $replacements[$old] = strpos($old, 'href="tel:') === 0
                ? 'href="tel:' . self::NEW_NUMBER . '">' . self::NEW_NUMBER
                : self::NEW_NUMBER;
        }
        uksort($replacements, function ($a, $b) {
            return strlen($b) - strlen($a);
        });

        $columns = DB::select(
            "SELECT TABLE_NAME AS t, COLUMN_NAME AS c FROM information_schema.COLUMNS
             WHERE TABLE_SCHEMA = ? AND DATA_TYPE IN ('char', 'varchar', 'tinytext', 'text', 'mediumtext', 'longtext')",
            [DB::getDatabaseName()]
        );

        // Step 1: preview. Nothing is written yet; every changed value is checked so a schema can't break.
        $plan = [];
        foreach ($columns as $column) {
            if (in_array($column->t, self::SKIP_TABLES, true)) {
                continue;
            }

            $rows = DB::table($column->t)->where(function ($query) use ($column) {
                foreach (['%472-5540%', '%4725540%', '%472 5540%', '%472.5540%'] as $pattern) {
                    $query->orWhere($column->c, 'like', $pattern);
                }
            })->pluck($column->c);

            $count = 0;
            foreach ($rows as $value) {
                $newValue = str_replace(array_keys($replacements), array_values($replacements), $value);
                if ($newValue === $value) {
                    continue;
                }
                if ($this->breaksJson($value, $newValue)) {
                    $this->command->error("Stopped: a schema in {$column->t}.{$column->c} would become invalid. Nothing was changed.");
                    return;
                }
                $count++;
            }

            if ($count) {
                $plan[] = $column;
                $this->command->line("  {$column->t}.{$column->c}: $count row(s) will change");
            }
        }

        if (!$plan) {
            $this->command->info('Nothing to update, the old number is not in the database.');
            return;
        }

        if (!$this->command->confirm('Replace the old number with ' . self::NEW_NUMBER . ' in these rows?', false)) {
            $this->command->warn('Cancelled. Nothing was changed.');
            return;
        }

        // Step 2: update, all or nothing.
        $total = DB::transaction(function () use ($plan, $replacements) {
            $total = 0;
            foreach ($plan as $column) {
                $col = '`' . str_replace('`', '``', $column->c) . '`';
                $table = '`' . str_replace('`', '``', $column->t) . '`';

                $expression = $col;
                $bindings = [];
                foreach ($replacements as $old => $new) {
                    $expression = "REPLACE($expression, ?, ?)";
                    $bindings[] = $old;
                    $bindings[] = $new;
                }

                $total += DB::update(
                    "UPDATE $table SET $col = $expression WHERE $col LIKE ? OR $col LIKE ? OR $col LIKE ? OR $col LIKE ?",
                    array_merge($bindings, ['%472-5540%', '%4725540%', '%472 5540%', '%472.5540%'])
                );
            }
            return $total;
        });

        $this->command->info("Done: $total row(s) now use " . self::NEW_NUMBER);
    }

    // True when a JSON-LD block (or a plain JSON value) that was valid before the change is invalid after it.
    private function breaksJson($before, $after)
    {
        return $this->validJsonBlocks($after) < $this->validJsonBlocks($before);
    }

    private function validJsonBlocks($value)
    {
        $blocks = preg_match_all('#<script[^>]*application/ld\+json[^>]*>(.*?)</script>#is', $value, $matches)
            ? $matches[1]
            : [$value];

        $valid = 0;
        foreach ($blocks as $block) {
            json_decode(html_entity_decode(trim($block)));
            if (json_last_error() === JSON_ERROR_NONE) {
                $valid++;
            }
        }
        return $valid;
    }
}
