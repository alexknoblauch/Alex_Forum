<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Travel>
 */
class TravelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(4);

        return [
            'title' => $title,
            'title_slug' => Str::slug($title),
            'user_id' => User::factory(),
            'canton' => $this->faker->randomElement(['AG', 'ZH', 'BE', 'BS', 'GR', 'LU', 'OW', 'NW']),
            'gemeinde' => $this->faker->paragraph(1),
            'description' => $this->faker->sentence(10)
        ];
    }
}
