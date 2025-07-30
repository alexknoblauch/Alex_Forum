<?

test('that true is true', function () {
    expect(true)->toBeTrue();
});

test('base Route', function(){
   $response = $this->get('/');
   $response->assertViewIs('welcome');
});

test('cooking Route', function(){
    $response = $this->get('/kochtipps');
    $response->assertViewIs('cooking.index');
});

test('Travel Route', function(){
    $response = $this->get('/ausflug');
    $response->assertViewIs('travel.index');
});

test('user can reach Cooking Post route', function () {
    $user = User::factory()->create();
    $response = $this->actingAs($user)->get('/kochtipps/post');
    $response->assertViewIs('cooking.store');
});

test('user can reach Trip Post route', function(){
    $user = User::factory()->create();
    $response = $this->actingAs($user)->get('/ausflug/post');
    $respone->assertViewIs('travel.store');
});

 