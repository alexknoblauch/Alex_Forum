<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Helpinghand>
 */
class HelpinghandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return 
            [      
                'user_id' => $this->faker->numberBetween(1, 10),
                'title' => $this->faker->sentence(5),
                'type' => $this->faker->word(),
                'location' => $this->faker->word(),
                'canton' => $this->faker->randomElement(['AG', 'ZH', 'BE', 'BS', 'GR', 'LU', 'OW', 'NW']),
                'description' => $this->faker->sentence(10)
            ]
        ;
    }
}
