<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['roles_nombre' => 'Administrador'],
            ['roles_nombre' => 'Jefe_proyecto'],
            ['roles_nombre' => 'Jefe_grupo'],
            ['roles_nombre' => 'Trabajador'],
        ];

        foreach ($roles as $rol) {
            DB::table('rols')->insert([
                'roles_nombre' => $rol['roles_nombre'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}