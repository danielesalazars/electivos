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
            'roles',
            'usuarios',
            'password_resets',
            'perfiles',
            'tipo_actividades',
            'tipo_electivos',
        ));
        
        $this->call(DepartamentoAcademicoTableSeeder::class);
        $this->call(AreaTableSeeder::class);
        $this->call(EspecialidadTableSeeder::class);
        $this->call(TipoActividadTableSeeder::class);
        $this->call(TipoElectivoTableSeeder::class);
        $this->call(TipoOfertaTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(TutorTableSeeder::class);
        //EJECUTAR ANTES LA TABLA PAISES
        $this->call(SedeTableSeeder::class);
        
        $this->call(UsuarioTableSeeder::class);
        $this->call(PerfilTableSeeder::class);

        Model::reguard();
    }

    private function truncateTables(array $tables){

        $this->checkForeignKey(false);

        foreach ($tables as $table) {
            DB::Table($table)->truncate();
        }

        $this->checkForeignKey(true);

    }

    private function checkForeignKey($check){

        $check = $check ? '1' : '0';
        DB::statement('SET FOREIGN_KEY_CHECKS = '. $check);

    }
}
