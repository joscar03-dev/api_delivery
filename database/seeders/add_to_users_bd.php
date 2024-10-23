<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class add_to_users_bd extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Crear un nuevo usuario
         User::create([
            'name' => 'John Doe', // Nombre del usuario
            'email' => 'john@example.com', // Email del usuario
            'password' => Hash::make('password123'), // Contraseña del usuario
        ]);
    }
}
