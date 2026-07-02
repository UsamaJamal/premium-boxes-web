<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$cat = DB::table('add_category')->where('name', 'Pizza Boxes')->first();
print_r($cat);

$prod = DB::table('product')->where('title', 'Pizza Boxes')->first();
print_r($prod);
