<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Crear el usuario específico que pediste
        User::create([
            'nombre' => 'Antonio',
            'apellido_1' => 'Perez',
            'apellido_2' => 'Aguilera',
            'email' => 'antoniomsm1@gmail.com',
            'email_verified_at' => now(),
            'telefono' => '666666666',
            'id_roles' => 1, // Asumiendo que 1 es Administrador
            'settings' => 'dark',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        // 2. Crear usuarios aleatorios usando un bucle
        // Usamos el helper fake() igual que en el Factory
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'nombre' => fake()->firstName(),
                'apellido_1' => fake()->lastName(),
                'apellido_2' => fake()->lastName(),
                'email' => fake()->unique()->safeEmail(),
                'email_verified_at' => now(),
                'telefono' => fake()->phoneNumber(),
                'id_roles' => 4, // Trabajador
                'settings' => fake()->randomElement(['dark', 'light']),
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
            ]);
        }
    }
}