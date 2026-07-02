<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$ind_cat = DB::table('add_category')->where('name', 'like', '%style%')->orWhere('name', 'like', '%Style%')->first();
if ($ind_cat) {
    echo "Category URL: " . $ind_cat->category_url . "\n";
}
