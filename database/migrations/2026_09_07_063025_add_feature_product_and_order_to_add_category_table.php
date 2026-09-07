<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFeatureProductAndOrderToAddCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('add_category', function (Blueprint $table) {
            if (!Schema::hasColumn('add_category', 'feature_product')) {
                $table->string('feature_product')->nullable();
            }
            if (!Schema::hasColumn('add_category', 'feature_order')) {
                $table->integer('feature_order')->default(0);
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('add_category', function (Blueprint $table) {
            if (Schema::hasColumn('add_category', 'feature_product')) {
                $table->dropColumn('feature_product');
            }
            if (Schema::hasColumn('add_category', 'feature_order')) {
                $table->dropColumn('feature_order');
            }
        });
    }
}
