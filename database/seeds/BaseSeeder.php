<?php

use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;
use Faker\Generator;

abstract class BaseSeeder extends Seeder{

    protected static $pool = array();

	protected function createMultiple($total, array $valoresPersonalizados = array()){
        for ($i=0; $i <$total ; $i++) {
            $this->create($valoresPersonalizados);
        }
    }

    abstract public function getModel();
    abstract public function getDummyData(Generator $faker, array $valoresPersonalizados = array());

    protected function create(array $valoresPersonalizados = array()){
    	$values = $this->getDummyData(Faker::create(),$valoresPersonalizados);
    	$values = array_merge($values,$valoresPersonalizados);
    	//return $this->getModel()->create($values);
        return $this->addToPool($this->getModel()->create($values));
    }

    protected function createFrom($seeder, array $valoresPersonalizados = array()){
        $seeder = new $seeder;
        return $this->create($valoresPersonalizados);
    }

    protected function getRandom($model){
        if(! $this->collectionExist($model)){
            throw new Exception("El modelo o coleccion no existe");
        }
        return static::$pool[$model]->random();
    }

    private function addToPool($entity){
        $reflection = new ReflectionClass($entity);
        $class = $reflection->getShortName();

        if(! $this->collectionExist($class)){
            static::$pool[$class] = new Collection();
        }

        static::$pool[$class]->add($entity);
        return $entity;
    }

    private function collectionExist($class){
        return isset (static::$pool[$class]);
    }
}