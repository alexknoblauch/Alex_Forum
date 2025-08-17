<?php
use App\Models\User; 

test('User can create a Travel', function(){
    $user = User::factory()->create();

    $payload = [
        'title' => 'Test Travel',
        'title_slug' => 'test-travel',
        'canton' => 'AG',
        'gemeinde' => 'Wohlen',
        'description' => 'random desc',
    ];

    $request = $this->actingAs($user)->postJson(route('travel.store'), $payload);

    $request->dump();


    $request->assertStatus(302);

    $this->assertDatabaseHas('travels', [
        'title' => 'Test Travel',
        'title_slug' => 'test-travel',
    ]);
});