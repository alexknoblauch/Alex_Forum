<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call(CookingSeeder::class);
        $this->call(TravelSeeder::class);
        $this->call(AuthorSeeder::class);
        $this->call(HelpingSeeder::class);
        $this->call(BookSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(GemeindeSeeder::class);
        $this->call(TrickSeeder::class);
        $this->call(GroupSeeder::class);
        $this->call(GroupPostSeeder::class);

    }
}
