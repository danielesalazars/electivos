<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(electivos\Usuario::class, function (Faker\Generator $faker) {
    return [
        'email' 		=> $faker->unique()->email,
        'password' 		=> bcrypt(str_random(10)),
        'remember_token'=> str_random(10),
        'dni'           => $faker->unique()->randomNumber($nbDigits = 8),
    ];
});

$factory->define(electivos\DatosUsuario::class, function (Faker\Generator $faker) {
    return [
        'nombres' 		=>  $faker->firstName,
    	'apellidos' 	=>  $faker->lastName,
    	'telefono'		=>  '5' . $faker->randomNumber($nbDigits = 6),
    	'celular'		=>  '9' . $faker->randomNumber($nbDigits = 8),
    	'direccion' 	=>	$faker->streetAddress,
    	'year'			=>	$faker->randomDigit($nbDigits = 6),
    	'orden_merito'	=>	$faker->numberBetween($min = 2, $max = 10),
    ];
});