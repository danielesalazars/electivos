<?php

use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::Table('usuarios')->truncate();

        factory(App\Usuario::class)->create([
            'email'    => 'daniel.esalazars@gmail.com',
            'password' => Hash::make('secret'),
            'dni'      => '45888211',
        ]);

        factory(App\Usuario::class, 9)->create());
    }
}
