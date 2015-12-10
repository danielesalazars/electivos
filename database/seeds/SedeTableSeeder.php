<?php

use Faker\Generator;
use electivos\Model\Sede;

class SedeTableSeeder extends BaseSeeder
{
    public function run()
    {
        Sede::create(['nombre' => 'Hospital Nacional Cayetano Heredia',             'pais_id' => 160 ]);
        Sede::create(['nombre' => 'Hospital Nacional Arzobispo Loayza',             'pais_id' => 160 ]);
        Sede::create(['nombre' => 'UPCH Sede Central / Miraflores',                 'pais_id' => 160 ]);
        Sede::create(['nombre' => 'Instituto de Medicina Tropical Alexander Von',   'pais_id' => 160 ]);
        Sede::create(['nombre' => 'Instituto de Gerontología - UPCH',               'pais_id' => 160 ]);
    }

    public function getDummyData(Generator $faker, array $valoresPersonalizados = array()) {
        
    }

    public function getModel() {
        
    }

}
