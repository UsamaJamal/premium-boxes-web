<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

DB::table('add_category')->where('cat_id', 112)->update([
    'image' => '1782907672-Promotional-Items.webp',
    'bimage' => '1782907672-b-Promotional-Items.webp',
    'hero_image' => '1782907672-h-Promotional-Items.webp'
]);
echo "Updated successfully.";
