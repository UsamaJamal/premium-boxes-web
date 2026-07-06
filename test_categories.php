<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$categories = DB::table('add_category')->get();
foreach ($categories as $cat) {
    echo "ID: " . $cat->cat_id . " | Name: " . $cat->name . " | Parent: " . $cat->parent_category . "\n";
}
