<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAnswers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_answers', function (Blueprint $table) 
		{
            $table->increments('ID')->unsigned()->unique();
            $table->integer('QuestionID')->unsigned();
			$table->string('Answer', 32);
			$table->boolean('IsCorrect');
			
			// Foreign Keys
			$table->foreign('QuestionID')->references('ID')->on('tbl_questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::drop('tbl_answers');
    }
}
