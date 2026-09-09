<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailLogsTable extends Migration
{
    public function up()
    {
        Schema::create('email_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('to_email');
            $table->string('from_email');
            $table->string('subject', 500);
            $table->text('body');
            $table->string('reply_to')->nullable();
            $table->string('status', 50)->nullable()->default('pending');
            $table->text('error_message')->nullable();
            $table->string('form_type', 100)->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('email_logs');
    }
}
