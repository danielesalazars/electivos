<?php

use Faker\Generator;
use electivos\Model\Especialidad;

class EspecialidadTableSeeder extends BaseSeeder
{
    public function run()
    {
        Especialidad::create(['nombre' => 'Psiquiatría de Hospital General', 'area_id' => 3]);
        Especialidad::create(['nombre' => 'Medicina Interna', 'area_id' => 1]);
        Especialidad::create(['nombre' => 'Desarrollo de Tesis-Nefrología', 'area_id' => 1]);
        Especialidad::create(['nombre' => 'Medicina Interna - Infectología', 'area_id' => 1]);
        Especialidad::create(['nombre' => 'Geriatría', 'area_id' => 1]);
        Especialidad::create(['nombre' => 'Reumatología', 'area_id' => 1]);
        Especialidad::create(['nombre' => 'Cardiología', 'area_id' => 5]);
        Especialidad::create(['nombre' => 'Nefrología', 'area_id' => 1]);
        Especialidad::create(['nombre' => 'Investigación Clinica - Módulo de desarrollo de proyectos', 'area_id' => 5]);
        Especialidad::create(['nombre' => 'Psiquiatría de Emergencia en Hospital General', 'area_id' => 1]);
        Especialidad::create(['nombre' => 'Psiquiatría de Hospital General y Medicina Psicosomática', 'area_id' => 3]);
    }

    public function getDummyData(Generator $faker, array $valoresPersonalizados = array()) {
        
    }

    public function getModel() {
        
    }

}
