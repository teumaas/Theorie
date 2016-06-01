<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblScore extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_score', function (Blueprint $table) 
		{
            $table->increments('ID')->unsigned()->unique();
            $table->integer('UserID')->unsigned();
            $table->integer('QuestionID')->unsigned();
			$table->integer('AnswerID')->unsigned();
			
			// Foreign Keys
			$table->foreign('UserID')->references('ID')->on('tbl_users');
			$table->foreign('QuestionID')->references('ID')->on('tbl_questions');
			$table->foreign('AnswerID')->references('ID')->on('tbl_answers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::drop('tbl_score');
    }
}
