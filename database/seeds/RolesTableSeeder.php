<?php

use Faker\Generator;
use electivos\Model\Rol;

class RolesTableSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create(['nombre'    => 'administrador']);
        Rol::create(['nombre'    => 'alumno']);
    }

    public function getDummyData(Generator $faker, array $valoresPersonalizados = array()) {
        
    }

    public function getModel() {
        
    }

}
