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
			DB::table('users')->insert([
				'Firstname' => $faker->firstName,
				'Lastname' => $faker->lastName,
				'UserName' => $faker->userName,
				'Email' => $faker->email,
				'Password' => Crypt::encrypt($faker->password),
				'LastLogin' => Carbon::now()->addHour(rand(0, 24))->addMinute(rand(0, 60))->addSecond(rand(0, 60)),
				'remember_token' => str_random(50),
				'created_at' => Carbon::now()->addDay(-3)->addHour(rand(0, 24))->addMinute(rand(0, 60))->addSecond(rand(0, 60)),
				'updated_at' => Carbon::now()->addDay(-1)->addMinute(rand(0, 60))->addSecond(rand(0, 60))
			]);
		}
    }
}
