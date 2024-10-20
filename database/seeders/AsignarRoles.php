<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AsignarRoles extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Encuentra al usuario con ID 1


        $user
            =
            User
            ::find(
                1
            );
        // Asegúrate de que el usuario con ID 1 existe



        if (
            $user
        ) {

            // Asigna el rol 'admin' al usuario


            $user
                ->assignRole(
                    'admin'
                );
            // 'admin' es el nombre del rol que ya existe

        } else {

            echo

            "Usuario no encontrado.";
        }
    }
}
