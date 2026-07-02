<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$tables = DB::select('SHOW TABLES');
foreach ($tables as $table) {
    $tableName = array_values((array)$table)[0];
    if (stripos($tableName, 'slider') !== false || stripos($tableName, 'banner') !== false || stripos($tableName, 'home') !== false) {
        echo "Table: $tableName\n";
        try {
            $cols = DB::select("SHOW COLUMNS FROM $tableName");
            foreach ($cols as $col) {
                echo "  - {$col->Field} ({$col->Type})\n";
            }
            $count = DB::table($tableName)->count();
            echo "  Row Count: $count\n";
            if ($count > 0) {
                $rows = DB::table($tableName)->limit(2)->get();
                print_r($rows);
            }
        } catch (\Exception $e) {
            echo "  Error: " . $e->getMessage() . "\n";
        }
        echo "-------------------------\n";
    }
}
