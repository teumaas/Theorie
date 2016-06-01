<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblUserTest extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('tbl_user_test', function (Blueprint $table) 
		{
            $table->increments('ID')->unsigned()->unique();
            $table->integer('UserID')->unsigned();
            $table->integer('TestID')->unsigned();
			$table->integer('Score');
			$table->boolean('PassedOrFailed');
			
			// Foreign Keys
			$table->foreign('UserID')->references('ID')->on('tbl_users');
			$table->foreign('TestID')->references('ID')->on('tbl_test');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_user_test');
	}
}