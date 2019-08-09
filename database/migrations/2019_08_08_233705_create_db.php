<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('categories', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->timestamps();
        $table->string('name');
      });

      Schema::create('questions', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->timestamps();
          $table->string('question');
          $table->unsignedBigInteger('category_id')->nullable();
          $table->foreign('category_id')->references('id')->on('categories');
      });

      Schema::create('answers', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->timestamps();
          $table->string('answer');
          $table->unsignedBigInteger('question_id')->nullable();
          $table->foreign('question_id')->references('id')->on('questions');
          $table->boolean('isCorrect');
      });

      Schema::create('rounds', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->timestamps();
          $table->unsignedBigInteger('user_id')->nullable();
          $table->foreign('user_id')->references('id')->on('users');
          $table->unsignedBigInteger('question_id')->nullable();
          $table->foreign('question_id')->references('id')->on('questions');
          $table->numeric('score');
      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('questions');
        Schema::dropIfExists('answers');
        Schema::dropIfExists('rounds');
    }
}
