<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();
print_r(DB::getSchemaBuilder()->getColumnListing('frequently_ask_question'));
$data = DB::table('frequently_ask_question')->first();
print_r($data);
