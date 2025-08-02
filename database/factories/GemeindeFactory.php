<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Gemeinde>
 */
class GemeindeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'gemeinde' => $this->faker->randomElement(['Wohlen', 'Waltenschwil', 'Büttikon', 'Zufikon']),
            'travel_id' => $this->faker->numberBetween(1,10)
        ];
    }
}
