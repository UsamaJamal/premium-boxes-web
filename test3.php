<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$cats = DB::table('add_category')->where('name', 'like', '%promotional%')->get();
foreach($cats as $c) {
    echo $c->name . ' (ID: ' . $c->cat_id . ', Parent: ' . $c->parent_category . ')' . PHP_EOL;
}
