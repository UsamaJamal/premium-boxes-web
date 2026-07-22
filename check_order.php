<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;

$cats = DB::table('add_category')
    ->whereNotNull('feature_product')
    ->where('feature_product', '!=', '')
    ->where('status', 1)
    ->where('show_home', 1)
    ->orderBy('feature_order', 'asc')
    ->orderBy('cat_id', 'asc')
    ->get(['name', 'feature_order', 'cat_id']);

foreach($cats as $index => $c) {
    echo ($index + 1) . ". " . $c->name . " (Order: " . $c->feature_order . ", ID: " . $c->cat_id . ")\n";
}
