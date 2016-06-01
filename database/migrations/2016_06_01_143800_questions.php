<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Questions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) 
		{
            $table->increments('ID')->unsigned()->unique();
            $table->integer('TypeID')->unsigned();
			$table->string('Title', 64);
			$table->string('ImageURL');
			
			// Foreign Keys
			$table->foreign('TypeID')->references('ID')->on('question_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::drop('questions');
    }
}
