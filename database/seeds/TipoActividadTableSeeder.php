<?php

use Faker\Generator;
use electivos\Model\TipoActividad;

class TipoActividadTableSeeder extends BaseSeeder
{
    public function run()
    {
        $actividades = ['Académicas','Cientificas','Deportivas','Culturales','Proyección Social','Representación','Idiomas'];
        for ($i = 0; $i < count($actividades); $i++){
            TipoActividad::create(['nombre' => $actividades[$i] ]);
        }
                
    }

    public function getDummyData(Generator $faker, array $valoresPersonalizados = array()) {
        
    }

    public function getModel() {
        
    }

}
