<?php

use Illuminate\Database\Seeder;

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
		
		for($i = 1; $i < 10; $i++)
		{
			DB::table('users')->insert([
				'Firstname' => $faker->firstName,
				'Lastname' => $faker->lastName,
				'UserName' => $faker->userName,
				'Email' => $faker->email,
				'Password' => $faker->password,
				'remember_token' => str_random(50),
				'created_at' => date('d-m-Y H:i:s'),
				'updated_at' => date('d-m-Y H:i:s')
			]);
		}
    }
}
