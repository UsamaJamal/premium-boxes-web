<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\Schema;

if (!Schema::hasColumn('add_category', 'schema')) {
    Schema::table('add_category', function($table) {
        $table->longText('schema')->nullable();
    });
    echo "Added schema column.\n";
} else {
    echo "Column already exists.\n";
}
