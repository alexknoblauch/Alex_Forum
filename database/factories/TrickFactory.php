<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trick>
 */
class TrickFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = implode(' ', $this->faker->words(3));

        return [
            'title' => $title,
            'title_slug' => Str::slug($title),
            'description' => $this->faker->paragraph(10),
            'user_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}

