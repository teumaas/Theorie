<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Scores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) 
		{
            $table->increments('ID')->unsigned()->unique();
            $table->integer('UserID')->unsigned();
            $table->integer('QuestionID')->unsigned();
			$table->integer('AnswerID')->unsigned();
			
			// Foreign Keys
			$table->foreign('UserID')->references('ID')->on('users');
			$table->foreign('QuestionID')->references('ID')->on('questions');
			$table->foreign('AnswerID')->references('ID')->on('answers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::drop('scores');
    }
}
