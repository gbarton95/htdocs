<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Character;
use App\Models\Tournament;
use App\Models\Score;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       Character::factory(10)->create();
    //    Tournament::factory(10)->create();
    //    Score::factory(10)->create();

    }
}
