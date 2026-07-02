<?php
require 'd:\bootstrap\vendor\autoload.php';
$app = require_once 'd:\bootstrap\bootstrap\app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

$promo = DB::table('add_category')->where('name', 'Promotional Product')->first();
if ($promo) {
    $promoChildrenIds = DB::table('add_category')->where('parent_category', $promo->cat_id)->pluck('cat_id')->toArray();
    $promoSidebar = DB::table('add_category')->whereIn('parent_category', $promoChildrenIds)->get();
    foreach($promoSidebar as $p) { echo $p->name . "\n"; }
}
?>
