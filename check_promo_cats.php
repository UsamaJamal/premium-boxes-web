<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

$promo = DB::table('add_category')->where('name', 'like', '%promotional%')->first();
$printing = DB::table('add_category')->where('name', 'like', '%Printing Services%')->first();
$business = DB::table('add_category')->where('name', 'like', '%Business Essentials%')->first();
$labels = DB::table('add_category')->where('name', 'like', '%Label & Stickers%')->orWhere('name', 'like', '%Labels%')->get();

echo json_encode([
    'promo' => $promo,
    'printing' => $printing,
    'business' => $business,
    'labels' => $labels
]);
