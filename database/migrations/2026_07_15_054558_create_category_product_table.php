<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_product', function (Blueprint $table) {
            $table->integer('product_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->unique(['product_id', 'category_id']);
        });

        // Migrate existing data
        \Illuminate\Support\Facades\DB::statement('INSERT IGNORE INTO category_product (product_id, category_id) SELECT product_id, cat_id FROM product WHERE cat_id IS NOT NULL AND cat_id != ""');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_product');
    }
}
