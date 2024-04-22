<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerrosTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('perros')->insert([
            [
                'propietario_id' => 1,
                'nombre' => 'Rocky',
                'edad' => 4,
                'sexo' => 'Macho',
                'raza' => 'Pitbull',
                'peso' => 35,
                'PPP' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'propietario_id' => 1,
                'nombre' => 'Luna',
                'edad' => 1,
                'sexo' => 'Hembra',
                'raza' => 'Pomerania',
                'peso' => 5,
                'PPP' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'propietario_id' => 2,
                'nombre' => 'Max',
                'edad' => 6,
                'sexo' => 'Macho',
                'raza' => 'Bulldog Francés',
                'peso' => 12,
                'PPP' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'propietario_id' => 2,
                'nombre' => 'Daisy',
                'edad' => 3,
                'sexo' => 'Hembra',
                'raza' => 'Cocker Spaniel',
                'peso' => 14,
                'PPP' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'propietario_id' => 3,
                'nombre' => 'Charlie',
                'edad' => 2,
                'sexo' => 'Macho',
                'raza' => 'Beagle',
                'peso' => 10,
                'PPP' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'propietario_id' => 1,
                'nombre' => 'Molly',
                'edad' => 5,
                'sexo' => 'Hembra',
                'raza' => 'Dálmata',
                'peso' => 22,
                'PPP' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
