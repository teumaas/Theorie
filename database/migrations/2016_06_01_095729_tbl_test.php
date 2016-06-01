<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblTest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('tbl_test', function (Blueprint $table) 
		{
            $table->increments('ID')->unsigned()->unique();
            $table->string('Title', 32);
			$table->boolean('ExamOrPractice');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::drop('tbl_test');
    }
}
