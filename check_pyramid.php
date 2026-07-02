<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$cat = DB::table('add_category')->where('name', 'like', '%Pyramid%')->first();
print_r($cat);

$prod = DB::table('product')->where('title', 'like', '%Pyramid%')->first();
print_r($prod);
