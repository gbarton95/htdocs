<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropietariosTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('propietarios')->insert([
            [
                'nombre' => 'Juan',
                'apellidos' => 'Pérez González',
                'telefono' => '123456789',
                'email' => 'juan.perez@example.com',
                'codigo_postal' => '50014',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'María',
                'apellidos' => 'Luna Pedrera',
                'telefono' => '666826401',
                'email' => 'maria.luna@example.com',
                'codigo_postal' => '50012',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Mirio',
                'apellidos' => 'Tunesí Laola',
                'telefono' => '823665193',
                'email' => 'miriolaola@example.com',
                'codigo_postal' => '50009',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
