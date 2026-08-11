<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSeoColumnsToFrequentlyAskQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('frequently_ask_question', function (Blueprint $table) {
            $table->string('meta_robots')->nullable();
            $table->longText('schema')->nullable();
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
            $table->dropColumn(['meta_robots', 'schema']);
        });
    }
}
