<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Exams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('exams', function (Blueprint $table) 
		{
            $table->increments('ID')->unsigned()->unique();
            $table->string('Title', 32);
			$table->boolean('Practice');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::drop('exams');
    }
}
