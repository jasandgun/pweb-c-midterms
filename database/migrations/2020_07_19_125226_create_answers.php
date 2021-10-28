<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->bigIncrements('answer_id');
            $table->foreignId('answer_user_id');
            $table->foreignId('answer_discuss_id');
            $table->string('answer_content', 255);
            $table->string('answer_status', 1)->default('0');
            $table->timestamps();
            $table->foreign('answer_user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('answer_discuss_id')->references('discuss_id')->on('discuss')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('answers', function (Blueprint $table) {
            $table->dropForeign(['answer_user_id']);
            $table->dropForeign(['answer_discuss_id']);
        });
        Schema::dropIfExists('answers');
    }
}
