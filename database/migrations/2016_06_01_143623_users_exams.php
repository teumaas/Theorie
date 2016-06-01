<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersExams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
        Schema::create('users_exams', function (Blueprint $table) 
		{
            $table->increments('ID')->unsigned()->unique();
            $table->integer('UserID')->unsigned();
            $table->integer('ExamID')->unsigned();
			$table->integer('Score');
			$table->boolean('Passed');
        });
		
		Schema::table('users_exams', function($table)
		{
			$table->foreign('UserID')->references('ID')->on('users');
			$table->foreign('ExamID')->references('ID')->on('exams');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users_exams');
	}
}
