<?php
require 'd:\bootstrap\vendor\autoload.php';
$app = require_once 'd:\bootstrap\bootstrap\app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

$cats = DB::table('add_category')->where('parent_category', 0)->pluck('name');
foreach($cats as $c) { echo $c . "\n"; }
?>
