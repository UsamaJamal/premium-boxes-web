<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$subs = DB::table('add_category')->where('parent_category', 112)->get();
foreach($subs as $s) {
    echo $s->name . ' (ID: ' . $s->cat_id . ', URL: ' . $s->category_url . ')' . PHP_EOL;
}
