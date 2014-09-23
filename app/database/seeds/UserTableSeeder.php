<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 3) as $index)
		{
			User::create(array(
				'first_name' => $faker->userName,
				'password' => Hash::make('admin') //$faker->word
				));
		}
	}

}