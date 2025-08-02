<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Comment>
 */
class CommentFactory extends Factory
{



    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $types = [
            'App\Models\Post',
            'App\Models\Book',
            'App\Models\Cooking',
            'App\Models\Travel',
        ];
        
        return [
            'commentable_type' => $this->faker->randomElement($types),
            'commentable_id' => $this->faker->NumberBetween(1, 10),
            'comment' => $this->faker->sentence(7),
            'user_id' => $this->faker->NumberBetween(1, 10),
        ];
    }
}
