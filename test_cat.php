<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$cat = DB::table('add_category')->where('name', 'Specialty Labels')->first();
print_r($cat);
