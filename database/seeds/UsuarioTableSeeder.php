<?php

use electivos\Model\Usuario;
use Faker\Generator;

class UsuarioTableSeeder extends BaseSeeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createAdmin();
        $this->createMultiple(50);
    }

    private function createAdmin(){

        Usuario::create([
            'email'    => 'daniel.esalazars@gmail.com',
            'password' => bcrypt('secret'),
            'dni'      => '45888211',
        ]);

    }

    public function getModel()
    {
        return new Usuario();
    }

    public function getDummyData(Generator$faker, array $valoresPersonalizados = array())
    {
        return [
            'email'    => $faker->unique()->email,
            'password' => bcrypt('secret'),
            'dni'    => $faker->unique()->randomNumber($nbDigits = 8),
        ];
    }
}
