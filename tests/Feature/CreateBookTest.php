<?php
use App\Models\Book;
use App\Models\User;
use App\Models\Author;


test('user can create a book', function () {
    $user = User::factory()->create();
    $authorName = 'Max Mustermann'; 
    $author = Author::firstOrCreate(['author' => $authorName]);
    $data = [
        'title' => 'Test Title',
        'title_slug' => 'test-title',
        'cathegory' => 'Test Cathegory',
        'seiten' => 250,
        'author_id' => $author->id,
        'description' => 'test description'
    ];

    $response = $this->actingAs($user)->postJson(route('book.store'), $data);
    $response->assertStatus(302);

    $this->assertDatabaseHas('books', [
        'title' => 'Test Title',
        'title_slug' => 'test-title',
        'cathegory' => 'Test Cathegory',
        'seiten' => 250,
        'author_id' => 1,
        'description' => 'test description'
    ]);
});
