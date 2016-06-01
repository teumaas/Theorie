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
        Schema::create('tbl_users', function (Blueprint $usersTable) {
            $usersTable->increments('ID');
            $usersTable->string('FirstName', 32);
            $usersTable->string('LastName', 32);
            $usersTable->string('Username', 32)->unique();
            $usersTable->string('Email', 64)->unique;
            $usersTable->string('Password', 32);
            $usersTable->rememberToken();
            $usersTable->timestamps();
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
