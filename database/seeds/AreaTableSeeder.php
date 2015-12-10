<?php

use Faker\Generator;
use electivos\Model\Area;

class AreaTableSeeder extends BaseSeeder
{
    public function run()
    {
        Area::create(['nombre' => 'Medicina',                                       'departamento_academico_id' => 1]);
        Area::create(['nombre' => 'Pediatría',                                      'departamento_academico_id' => 1]);
        Area::create(['nombre' => 'Psiquiatría y Salud Mental',                     'departamento_academico_id' => 1]);
        Area::create(['nombre' => 'Patología',                                      'departamento_academico_id' => 2]);
        Area::create(['nombre' => 'Cencias Morfológicas',                           'departamento_academico_id' => 2]);
        Area::create(['nombre' => 'Radiología',                                     'departamento_academico_id' => 2]);
        Area::create(['nombre' => 'Cirugía',                                        'departamento_academico_id' => 3]);
        Area::create(['nombre' => 'Ginecología, Obstetricia y Salud Reproductiva',  'departamento_academico_id' => 3]);
    }

    public function getDummyData(Generator $faker, array $valoresPersonalizados = array()) {
        
    }

    public function getModel() {
        
    }

}
