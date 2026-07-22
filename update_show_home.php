<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();
DB::table('add_category')->whereNotNull('feature_product')->where('feature_product', '!=', '')->update(['show_home' => 1]);
echo "Updated successfully";
