<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tournament;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tournament>
 */
class TournamentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Tournament::class;


    public function definition(): array
    {
        return [
            'nom' => $this->faker->sentence(2),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
