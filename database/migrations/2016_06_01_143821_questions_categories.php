<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuestionsCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('questions_categories', function (Blueprint $table) 
		{
            $table->increments('ID')->unsigned()->unique();
			$table->integer('CategoryID')->unsigned();
			$table->integer('QuestionsID')->unsigned();			
        });
		
		Schema::table('questions_categories', function($table)
		{
			$table->foreign('QuestionsID')->references('ID')->on('questions');
			$table->foreign('CategoryID')->references('ID')->on('categories');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::drop('questions_categories');
    }
}
