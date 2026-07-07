<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBentoBadgeToAddCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('add_category', function (Blueprint $table) {
            if (!Schema::hasColumn('add_category', 'image_badge')) {
                $table->string('image_badge')->nullable();
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
            if (Schema::hasColumn('add_category', 'image_badge')) {
                $table->dropColumn('image_badge');
            }
        });
    }
}
