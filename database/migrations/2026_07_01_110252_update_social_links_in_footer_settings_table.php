<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateSocialLinksInFooterSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('footer_settings', function (Blueprint $table) {
            $table->string('pinterest_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->dropColumn('youtube_url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('footer_settings', function (Blueprint $table) {
            $table->dropColumn('pinterest_url');
            $table->dropColumn('linkedin_url');
            $table->string('youtube_url')->nullable();
        });
    }
}
