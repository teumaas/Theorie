<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblQuestions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_questions', function (Blueprint $table) 
		{
            $table->increments('ID')->unsigned()->unique();
            $table->integer('TypeID')->unsigned();
            $table->integer('CategoryID')->unsigned();
			$table->string('Title', 64);
			$table->string('ImageURL');
			
			// Foreign Keys
			$table->foreign('TypeID')->references('ID')->on('tbl_question_type');
			$table->foreign('CategoryID')->references('ID')->on('tbl_question_category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::drop('tbl_questions');
    }
}
