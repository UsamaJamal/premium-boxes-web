<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$cats = [109, 88, 111];
foreach ($cats as $cat_id) {
    $prodCount = DB::table('product')->where('cat_id', $cat_id)->count();
    echo "Category $cat_id has $prodCount products\n";
    $subs = DB::table('add_category')->where('parent_category', $cat_id)->count();
    echo "Category $cat_id has $subs subcategories\n";
}
