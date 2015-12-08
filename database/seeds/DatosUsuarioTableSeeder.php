<?php

use electivos\Model\DatosUsuario;
use Faker\Generator;

class DatosUsuarioTableSeeder extends BaseSeeder
{
    public function run()
    {
		$this->createAdminData();
		$this->createMultiple(50);
    }

	private function createAdminData(){

		DatosUsuario::create([
			'nombres' 		=>  'Daniel Eduardo',
			'apellidos' 	=>  'Salazar Salabarriga',
			'telefono'		=>  '5699974',
			'celular'		=>  '992199393',
			'direccion' 	=>	'Jr. Ancash 3745',
			'year'			=>	'2',
			'orden_merito'	=>	'10',
			'usuario_id'	=>	1,
		]);

	}

	public function getModel()
	{
		return new DatosUsuario();
	}

	public function getDummyData(Generator $faker, array $valoresPersonalizados = array())
	{
		return [
			'nombres' 		=>  $faker->firstName,
			'apellidos' 	=>  $faker->lastName,
			'telefono'		=>  '5' . $faker->randomNumber($nbDigits = 6),
			'celular'		=>  '9' . $faker->randomNumber($nbDigits = 8),
			'direccion' 	=>	$faker->streetAddress,
			'year'			=>	$faker->randomDigit($nbDigits = 6),
			'orden_merito'	=>	$faker->numberBetween($min = 2, $max = 10),
			//'usuario_id'	=>	$this->createFrom('UsuarioTableSeeder')->id
			'usuario_id'	=>	$this->getRandom('Usuario')->id,
		];
	}
}
