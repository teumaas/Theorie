<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExamsQuestions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams_questions', function (Blueprint $table) 
		{
            $table->increments('ID')->unsigned()->unique();
            $table->integer('ExamID')->unsigned();
            $table->integer('QuestionID')->unsigned();
        });
		
		Schema::table('exams_questions', function($table)
		{
			$table->foreign('ExamID')->references('ID')->on('exams');
			$table->foreign('QuestionID')->references('ID')->on('questions');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('exams_questions');
    }
}
