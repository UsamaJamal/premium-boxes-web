<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\Schema;

if (!Schema::hasColumn('add_category', 'feature_product')) {
    Schema::table('add_category', function($table) {
        $table->string('feature_product')->nullable();
    });
    echo "Added feature_product column.\n";
} else {
    echo "Column already exists.\n";
}
