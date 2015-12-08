<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        
        $this->truncateTables(array(
            'usuarios',
            'password_resets',
            'datos_usuarios',
        ));
        
        $this->call(UsuarioTableSeeder::class);
        $this->call(DatosUsuarioTableSeeder::class);

        Model::reguard();
    }

    private function truncateTables(array $tables){

        $this->checkForeignKey(false);

        foreach ($tables as $table) {
            DB::Table('usuarios')->truncate();
        }

        $this->checkForeignKey(true);

    }

    private function checkForeignKey($check){

        $check = $check ? '1' : '0';
        DB::statement('SET FOREIGN_KEY_CHECKS = '. $check);

    }
}
