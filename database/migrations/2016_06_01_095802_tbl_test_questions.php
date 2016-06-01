<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblTestQuestions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_test_questions', function (Blueprint $table) 
		{
            $table->increments('ID')->unsigned()->unique();
            $table->integer('TestID')->unsigned();
            $table->integer('QuestionID')->unsigned();
			
			// Foreign Keys
			$table->foreign('TestID')->references('ID')->on('tbl_test');
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
        Schema::drop('tbl_test_questions');
    }
}
