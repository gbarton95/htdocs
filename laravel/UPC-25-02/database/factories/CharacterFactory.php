<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Character;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Character>
 */
class CharacterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Character::class;


    public function definition(): array
    {
        return [
            'nom' => $this->faker->name,
            'created_at' => now(),
            'updated_at' => now(),

        ];
    }
}
