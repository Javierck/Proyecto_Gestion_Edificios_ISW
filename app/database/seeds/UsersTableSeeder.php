<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 30) as $index)
		{
			User::create(array(
				'password'=>$faker->password,
				'real_name'=>$faker->name($gender = null|'male'|'female') ,
				'user_Type'=>$faker->boolean,
				'cellphone'=>$faker->phoneNumber,
				'email'=>$faker->email,
				'date'=>$faker->date($format = 'Y-m-d', $max = 'now'),
			));
		}
	}

}