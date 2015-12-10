<?php

use Faker\Generator;
use electivos\Model\Tutor;

class TutorTableSeeder extends BaseSeeder
{

    public function getDummyData(Generator $faker, array $valoresPersonalizados = array()) {
        return [
            'nombre'    => $faker->firstName,
            'apellido'  => $faker->lastName,
            'email'     => $faker->unique()->email,
            'telefono'  => '5' . $faker->randomNumber($nbDigits = 6),
            'celular'   => '9' . $faker->randomNumber($nbDigits = 8),
            'activo'    =>  1,
        ];
    }

    public function getModel() {
        return new Tutor();
    }

}
