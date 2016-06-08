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
			
			$table->increments('ID')->unsigned()->unique();
			$table->string('FirstName', 32);
			$table->string('LastName', 32);
			$table->string('Username', 32)->unique();
			$table->string('Email', 64)->unique();
			$table->string('Password', 32);
			$table->dateTime('LastLogin');
			$table->boolean('Enabled')->default(1);
			
			$table->rememberToken();
			$table->timestamps();
		});
		
		Schema::create('users_exams', function (Blueprint $table) 
		{
			$table->engine = 'InnoDB';
			
            $table->increments('ID')->unsigned()->unique();
            $table->integer('UserID')->unsigned();
            $table->integer('ExamID')->unsigned();
			$table->integer('Score');
			$table->boolean('Passed');
        });
		
		Schema::create('exams', function (Blueprint $table) 
		{
			$table->engine = 'InnoDB';
			
            $table->increments('ID')->unsigned()->unique();
            $table->string('Title', 32);
			$table->boolean('Practice');
        });
		
		Schema::create('scores', function (Blueprint $table) 
		{
			$table->engine = 'InnoDB';
			
            $table->increments('ID')->unsigned()->unique();
            $table->integer('UserID')->unsigned();
            $table->integer('QuestionID')->unsigned();
			$table->integer('AnswerID')->unsigned();
        });
		
		Schema::create('exams_questions', function (Blueprint $table) 
		{
			$table->engine = 'InnoDB';
			
            $table->increments('ID')->unsigned()->unique();
            $table->integer('ExamID')->unsigned();
            $table->integer('QuestionID')->unsigned();
        });
		
		Schema::create('questions_types', function (Blueprint $table) 
		{
			$table->engine = 'InnoDB';
			
            $table->increments('ID')->unsigned()->unique();
            $table->string('TypeName', 32);
        });
		
		Schema::create('questions', function (Blueprint $table) 
		{
			$table->engine = 'InnoDB';
			
            $table->increments('ID')->unsigned()->unique();
            $table->integer('TypeID')->unsigned();
			$table->string('Title', 64);
			$table->string('ImageURL');
        });
			
		Schema::create('questions_categories', function (Blueprint $table) 
		{
			$table->engine = 'InnoDB';
			
            $table->increments('ID')->unsigned()->unique();
			$table->integer('CategoryID')->unsigned();
			$table->integer('QuestionsID')->unsigned();
        });
				
		Schema::create('answers', function (Blueprint $table) 
		{
			$table->engine = 'InnoDB';
			
            $table->increments('ID')->unsigned()->unique();
            $table->integer('QuestionID')->unsigned()->index();
			$table->string('Answer', 32);
			$table->boolean('IsCorrect');
        });
				
		Schema::create('answers_motivations', function (Blueprint $table) 
		{
			$table->engine = 'InnoDB';
			
            $table->increments('ID')->unsigned()->unique();
            $table->integer('AnswerID')->unsigned();
			$table->string('Context', 128);
        });
				
		Schema::create('categories', function (Blueprint $table) 
		{
			$table->engine = 'InnoDB';
			
            $table->increments('ID')->unsigned()->unique();
			$table->string('Name', 32);
        });
		
		//Foreign Keys
		
		Schema::table('users_exams', function ($table)
		{
			$table->foreign('UserID')->references('ID')->on('users');
			$table->foreign('ExamID')->references('ID')->on('exams');
		});
		
		Schema::table('scores', function ($table)
		{
			$table->foreign('UserID')->references('ID')->on('users');
			$table->foreign('QuestionID')->references('ID')->on('questions');
			$table->foreign('AnswerID')->references('ID')->on('answers');
		});
		
		Schema::table('exams_questions', function ($table)
		{
			$table->foreign('ExamID')->references('ID')->on('exams');
			$table->foreign('QuestionID')->references('ID')->on('questions');
		});
		
		Schema::table('questions', function ($table)
		{
			$table->foreign('TypeID')->references('ID')->on('questions_types');
		});
		
		Schema::table('questions_categories', function ($table)
		{
			$table->foreign('QuestionsID')->references('ID')->on('questions');
			$table->foreign('CategoryID')->references('ID')->on('categories');
		});
		
		Schema::table('answers', function ($table)
		{
			$table->foreign('QuestionID')->references('ID')->on('questions');
		});
		
		Schema::table('answers_motivations', function ($table)
		{
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
		Schema::drop('questions');
		Schema::drop('scores');
		
		\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
