<?php

namespace App\Support;

use Illuminate\Support\Facades\DB;

class QuoteProductOptions
{
    /**
     * Combine published website products with the imported product-name list.
     * A normalized key prevents names that already exist in the database from
     * appearing a second time in the quote picker.
     *
     * @return array
     */
    public function all()
    {
        $imported = $this->importedNames();

        try {
            $published = DB::table('product')
                ->where('status', 1)
                ->orderBy('title')
                ->pluck('title')
                ->all();
        } catch (\Exception $exception) {
            $published = array();
        }

        $unique = array();
        $seen = array();

        foreach (array_merge($published, $imported) as $name) {
            $name = trim((string) $name);
            $key = $this->key($name);

            if ($name === '' || $key === '' || isset($seen[$key])) {
                continue;
            }

            $seen[$key] = true;
            $unique[] = $name;
        }

        natcasesort($unique);

        return array_values($unique);
    }

    protected function importedNames()
    {
        $path = resource_path('data/quote-product-options.json');

        if (!is_file($path)) {
            return array();
        }

        $names = json_decode(file_get_contents($path), true);

        return is_array($names) ? $names : array();
    }

    protected function key($name)
    {
        $name = strtolower(trim((string) $name));

        return preg_replace('/[^a-z0-9]+/', '', $name);
    }
}
