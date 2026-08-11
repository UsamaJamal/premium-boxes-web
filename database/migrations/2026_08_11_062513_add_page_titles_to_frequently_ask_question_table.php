<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPageTitlesToFrequentlyAskQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('frequently_ask_question', function (Blueprint $table) {
            $table->string('page_title')->nullable();
            $table->string('page_subtitle')->nullable();
            $table->text('page_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('frequently_ask_question', function (Blueprint $table) {
            $table->dropColumn(['page_title', 'page_subtitle', 'page_description']);
        });
    }
}
