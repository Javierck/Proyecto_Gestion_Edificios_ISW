<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class DeptosTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 30) as $index)
		{
			Depto::create(array(
				'bodega'=>$faker->text,
				'estacionamiento'=>$faker->text,
				'gastos_Espe'=>$faker->randomNumber,
				'rut_Ed'=>$faker->randomNumber,
				'rut_Prop'=>$faker->randomNumber
			));
		}
	}

}