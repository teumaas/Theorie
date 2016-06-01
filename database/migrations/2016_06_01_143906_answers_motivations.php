<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AnswersMotivations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers_motivations', function (Blueprint $table) 
		{
            $table->increments('ID')->unsigned()->unique();
            $table->integer('AnswerID')->unsigned();
			$table->string('Context', 128);
			
			// Foreign Keys
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
		Schema::drop('answers_motivations');
    }
}
