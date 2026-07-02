<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();
$cats = DB::select('DESCRIBE add_category');
echo "Categories:\n";
foreach($cats as $c) { echo $c->Field . "\n"; }

$prods = DB::select('DESCRIBE product');
echo "Products:\n";
foreach($prods as $p) { echo $p->Field . "\n"; }
