<?php

use Faker\Generator;
use electivos\Model\TipoOferta;

class TipoOfertaTableSeeder extends BaseSeeder
{
    
    public function run()
    {
        TipoOferta::create(['tipo'    => 'Vacaciones']);
        TipoOferta::create(['tipo'    => 'Externado']);
    }

    public function getDummyData(\Faker\Generator $faker, array $valoresPersonalizados = array()) {
        
    }

    public function getModel() {
        
    }

}
