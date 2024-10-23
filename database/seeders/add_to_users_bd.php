<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class add_to_users_bd extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Crear un nuevo usuario
         $user = User::create([
            'name' => 'John Doe', // Nombre del usuario
            'email' => 'john@example.com', // Email del usuario
            'password' => Hash::make('password123'), // Contraseña del usuario
        ]);

        // Asignar el rol 'admin' al usuario
        $role = Role::where('name', 'admin')->first();
        
        if($role) {
            $user->assignRole($role);
        } else {
            $this->command->error("El rol 'admin' no existe.");
        }
    }
}
