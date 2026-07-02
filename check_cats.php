<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$industry_cat = DB::table('add_category')->where('name', 'like', '%industry%')->orWhere('name', 'like', '%Industry%')->first();
$sub_cats = DB::table('add_category')->where('parent_category', $industry_cat->cat_id)->get();
foreach($sub_cats as $c) {
    echo $c->name . "\n";
}
