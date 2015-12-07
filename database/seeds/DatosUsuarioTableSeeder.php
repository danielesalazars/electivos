<?php

use Illuminate\Database\Seeder;

class DatosUsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\DatosUsuario::class)->create([
        	'nombres' 		=> 'Daniel Eduardo',
        	'apellidos' 	=> 'Salazar Salabarriga',
        	'telefono'		=> '5699974',
        	'celular'		=> '992199393',
        	'direccion' 	=>	'Jr. Ancash 3745',
        	'year'			=>	1,
        	'orden_merito'	=>	5,
        	'usuario_id'	=>	1
        ]);

        //factory(App\DatosUsuario::class, 9)->create();
        factory(App\Usuario::class, 9)
            ->create()
            ->forEach(function(){
            
        }));
    }
}
