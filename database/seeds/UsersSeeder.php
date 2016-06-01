<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$faker = Faker\Factory::create();
		
		for($i = 0; $i < 10; $i++)
		{
			$today = Carbon::today()->addHour(rand(0, 24))->addMinute(rand(0, 60))->addSecond(rand(0, 60));
			$yesterday = Carbon::yesterday()->addHour(rand(0, 24))->addMinute(rand(0, 60))->addSecond(rand(0, 60));
			
			DB::table('users')->insert([
				'Firstname' => $faker->firstName,
				'Lastname' => $faker->lastName,
				'UserName' => $faker->userName,
				'Email' => $faker->email,
				'Password' => Crypt::encrypt($faker->password),
				'remember_token' => str_random(50),
				'created_at' => $today,
				'updated_at' => $yesterday
			]);
		}
    }
}
