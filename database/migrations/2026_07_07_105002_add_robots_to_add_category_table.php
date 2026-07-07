<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRobotsToAddCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('add_category', 'robots')) {
            Schema::table('add_category', function (Blueprint $table) {
                $table->string('robots')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('add_category', 'robots')) {
            Schema::table('add_category', function (Blueprint $table) {
                $table->dropColumn('robots');
            });
        }
    }
}
