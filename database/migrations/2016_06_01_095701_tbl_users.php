<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('tbl_users', function (Blueprint $table)
		{
			$table->increments('ID')->unsigned()->unique();
			$table->string('FirstName', 32);
			$table->string('LastName', 32);
			$table->string('Username', 32)->unique();
			$table->string('Email', 64)->unique();
			$table->string('Password', 32);
			
			$table->rememberToken();
			$table->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::drop('tbl_users');
    }
}