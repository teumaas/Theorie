<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAnswerMotivation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_answer_motivation', function (Blueprint $table) 
		{
            $table->increments('ID')->unsigned()->unique();
            $table->integer('AnswerID')->unsigned();
			$table->string('Context', 128);
			
			// Foreign Keys
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
		Schema::drop('tbl_answer_motivation');
    }
}
