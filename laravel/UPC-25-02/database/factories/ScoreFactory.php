<?php

namespace Database\Factories;

use App\Models\Score;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScoreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Score::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'character_id' => function () {
                return \App\Models\Character::factory()->create()->id;
            },
            'tournament_id' => function () {
                return \App\Models\Tournament::factory()->create()->id;
            },
            'score' => $this->faker->numberBetween(0, 100), 
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
