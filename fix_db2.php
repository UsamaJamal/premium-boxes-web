<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

DB::table('add_category')->where('cat_id', 110)->update([
    'image' => 'Box-by-Industry-Image.webp',
    'bimage' => 'Box-by-Industry-Image.webp',
    'hero_image' => 'Box-by-Industry-Image.webp'
]);
echo "Updated successfully.";
