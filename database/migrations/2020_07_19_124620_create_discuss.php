<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscuss extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discuss', function (Blueprint $table) {
            $table->bigIncrements('discuss_id');
            $table->foreignId('discuss_user_id');
            $table->foreignId('discuss_topic_id');
            $table->string('discuss_title');
            $table->string('discuss_status', 1)->default('0');
            $table->string('discuss_content');
            $table->timestamps();
            $table->foreign('discuss_user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('discuss_topic_id')->references('topic_id')->on('topics')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('discuss', function (Blueprint $table) {
            $table->dropForeign(['discuss_user_id']);
            $table->dropForeign(['discuss_topic_id']);
        });
        Schema::dropIfExists('discuss');
    }
}
