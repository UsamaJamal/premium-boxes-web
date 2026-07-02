<?php
require 'd:\bootstrap\vendor\autoload.php';
$app = require_once 'd:\bootstrap\bootstrap\app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

// Find 'Promotional Product' parent category
$promo = DB::table('add_category')->where('name', 'Promotional Product')->first();
if ($promo) {
    echo "Name: " . $promo->name . "\n";
    echo "cat_id: " . $promo->cat_id . "\n";
    echo "category_url: " . $promo->category_url . "\n";
    echo "parent_category: " . $promo->parent_category . "\n";
    echo "hero_title: " . $promo->hero_title . "\n";
    echo "hero_desc: " . $promo->hero_desc . "\n";
    echo "hero_image: " . $promo->hero_image . "\n";
    echo "title: " . $promo->title . "\n";
    echo "description: " . $promo->description . "\n";
    echo "status: " . $promo->status . "\n";
} else {
    echo "NOT FOUND!\n";
    // Try to find anything with 'promo'
    $all = DB::table('add_category')->where('name', 'LIKE', '%promo%')->get();
    foreach($all as $a) {
        echo "Found: " . $a->name . " | ID: " . $a->cat_id . " | URL: " . $a->category_url . " | parent: " . $a->parent_category . " | status: " . $a->status . "\n";
    }
}
?>
