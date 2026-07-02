<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

// Print the most recently updated categories to see what is going on
$cats = DB::table('add_category')->orderBy('cat_id', 'desc')->limit(5)->get();
foreach ($cats as $cat) {
    echo "ID: " . $cat->cat_id . "\n";
    echo "Name: " . $cat->name . "\n";
    echo "bimage: " . $cat->bimage . "\n";
    echo "hero_image: " . $cat->hero_image . "\n";
    echo "image: " . $cat->image . "\n";
    echo "--------------------\n";
}
