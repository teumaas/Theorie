<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DbLayout extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table)
		{
			$table->engine = 'InnoDB';
			
			$table->increments('id');
			$table->string('name', 32);
			$table->string('email', 64)->unique();
			$table->string('password', 32);
		
			$table->rememberToken();
			$table->timestamps();
		});
		
		Schema::create('users_password_resets', function (Blueprint $table) 
		{
			$table->engine = 'InnoDB';
			
            $table->string('email')->index();
            $table->string('token')->index();
			
            $table->timestamp('created_at');
        });
		
		Schema::create('users_exams', function (Blueprint $table) 
		{
			$table->engine = 'InnoDB';
			
            $table->increments('id')->unsigned()->unique();
            $table->integer('userid')->unsigned();
            $table->integer('examid')->unsigned();
			$table->integer('score');
			$table->boolean('passed');
        });
		
		Schema::create('exams', function (Blueprint $table) 
		{
			$table->engine = 'InnoDB';
			
            $table->increments('id')->unsigned()->unique();
            $table->string('title', 32);
			$table->boolean('practice');
        });
		
		Schema::create('scores', function (Blueprint $table) 
		{
			$table->engine = 'InnoDB';
			
            $table->increments('id')->unsigned()->unique();
            $table->integer('userid')->unsigned();
            $table->integer('questionid')->unsigned();
			$table->integer('answerid')->unsigned();
        });
		
		Schema::create('exams_questions', function (Blueprint $table) 
		{
			$table->engine = 'InnoDB';
			
            $table->increments('id')->unsigned()->unique();
            $table->integer('examid')->unsigned();
            $table->integer('questionid')->unsigned();
        });
		
		Schema::create('questions_types', function (Blueprint $table) 
		{
			$table->engine = 'InnoDB';
			
            $table->increments('id')->unsigned()->unique();
            $table->string('typename', 32);
        });
		
		Schema::create('questions', function (Blueprint $table) 
		{
			$table->engine = 'InnoDB';
			
            $table->increments('id')->unsigned()->unique();
            $table->integer('typeid')->unsigned();
			$table->string('title', 64);
			$table->string('imageurl');
        });
			
		Schema::create('questions_categories', function (Blueprint $table) 
		{
			$table->engine = 'InnoDB';
			
            $table->increments('id')->unsigned()->unique();
			$table->integer('categoryid')->unsigned();
			$table->integer('questionsid')->unsigned();
        });
				
		Schema::create('answers', function (Blueprint $table) 
		{
			$table->engine = 'InnoDB';
			
            $table->increments('id')->unsigned()->unique();
            $table->integer('questionid')->unsigned()->index();
			$table->string('answer', 32);
			$table->boolean('iscorrect');
        });
				
		Schema::create('answers_motivations', function (Blueprint $table) 
		{
			$table->engine = 'InnoDB';
			
            $table->increments('id')->unsigned()->unique();
            $table->integer('answerid')->unsigned();
			$table->string('context', 128);
        });
				
		Schema::create('categories', function (Blueprint $table) 
		{
			$table->engine = 'InnoDB';
			
            $table->increments('id')->unsigned()->unique();
			$table->string('name', 32);
        });
		
		//Foreign Keys
		
		Schema::table('users_exams', function ($table)
		{
			$table->foreign('userid')->references('id')->on('users');
			$table->foreign('examid')->references('id')->on('exams');
		});
		
		Schema::table('scores', function ($table)
		{
			$table->foreign('userid')->references('id')->on('users');
			$table->foreign('questionid')->references('id')->on('questions');
			$table->foreign('answerid')->references('id')->on('answers');
		});
		
		Schema::table('exams_questions', function ($table)
		{
			$table->foreign('examid')->references('id')->on('exams');
			$table->foreign('questionid')->references('id')->on('questions');
		});
		
		Schema::table('questions', function ($table)
		{
			$table->foreign('typeid')->references('id')->on('questions_types');
		});
		
		Schema::table('questions_categories', function ($table)
		{
			$table->foreign('questionsid')->references('id')->on('questions');
			$table->foreign('categoryid')->references('id')->on('categories');
		});
		
		Schema::table('answers', function ($table)
		{
			$table->foreign('questionid')->references('id')->on('questions');
		});
		
		Schema::table('answers_motivations', function ($table)
		{
			$table->foreign('answerid')->references('id')->on('answers');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		
		Schema::drop('categories');
		Schema::drop('questions_categories');
		Schema::drop('answers');
		Schema::drop('exams');
		Schema::drop('questions_types');
		Schema::drop('users_exams');
		Schema::drop('exams_questions');
		Schema::drop('answers_motivations');
		Schema::drop('users');
		Schema::drop('users_password_resets');
		Schema::drop('questions');
		Schema::drop('scores');
		
		\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
