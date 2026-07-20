<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

if (!Schema::hasColumn('add_category', 'feature_order')) {
    Schema::table('add_category', function (Blueprint $table) {
        $table->integer('feature_order')->default(999);
    });
    echo "feature_order column added.";
} else {
    echo "feature_order column already exists.";
}
