<?php

use Faker\Generator;
use electivos\Model\TipoElectivo;

class TipoElectivoTableSeeder extends BaseSeeder
{
    public function run()
    {
        $electivos = ['Vacaciones','Complementarios','Externado'];
        for ($i = 0; $i < count($electivos); $i++){
            TipoElectivo::create(['tipo' => $electivos[$i] ]);
        }
    }

    public function getDummyData(Generator $faker, array $valoresPersonalizados = array()) {
        
    }

    public function getModel() {
        
    }

}
