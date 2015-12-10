<?php

use Faker\Generator;
use electivos\Model\DepartamentoAcademico;

class DepartamentoAcademicoTableSeeder extends BaseSeeder
{
    public function run()
    {
        $departamento = ['Clínicas Médicas','Clínicas Quirúrgicas','Ciencias Pre-Clínicas'];
        for ($i = 0; $i < count($departamento); $i++){
            DepartamentoAcademico::create(['nombre' => $departamento[$i] ]);
        }
    }

    public function getDummyData(Generator $faker, array $valoresPersonalizados = array()) {
        
    }

    public function getModel() {
        
    }

}
