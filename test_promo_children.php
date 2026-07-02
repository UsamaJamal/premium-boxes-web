<?php
require 'd:\bootstrap\vendor\autoload.php';
$app = require_once 'd:\bootstrap\bootstrap\app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

$promo = DB::table('add_category')->where('name', 'Promotional Product')->first();
if ($promo) {
    echo "Promo ID: " . $promo->cat_id . "\n";
    $children = DB::table('add_category')->where('parent_category', $promo->cat_id)->pluck('name');
    echo "Children:\n";
    foreach($children as $c) { echo $c . "\n"; }
} else {
    echo "Promo not found!\n";
}
?>
