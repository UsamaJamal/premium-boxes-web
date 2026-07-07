<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddShowInNavToAddCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('add_category', function (Blueprint $table) {
            $table->tinyInteger('show_in_nav')->default(1)->comment('1: Show, 0: Hide');
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
            $table->dropColumn('show_in_nav');
        });
    }
}
