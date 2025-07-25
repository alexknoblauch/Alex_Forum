<?php
use App\Models\User;

test('user can post cooking', function () {
    $user = User::factory()->create();

    $payload = [
        'title' => 'Mein Rezept',
        'title_slug' => 'mein-rezept',
        'description' => 'Sehr lecker und einfach.',
        'duration' => 45,
        'user_id' => $user->id,
    ];

    $response = $this->actingAs($user)->postJson(route('cooking.store'), $payload);

    $response->assertStatus(200);

    $this->assertDatabaseHas('cookings', [
        'title' => 'Mein Rezept',
        'user_id' => $user->id,
    ]);
});