<?php

test('example', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

test('buchtipps route anstueren', function () {
    $response = $this->get('/buchtipps');

    $response->assertStatus(200);
});

test('Cooking route anstueren', function () {
    $response = $this->get('/kochtipps');

    $response->assertStatus(200);
});

test('Travel route anstueren', function () {
    $response = $this->get('/ausflug');

    $response->assertStatus(200);
});

test('Helfendehand route anstueren', function () {
    $response = $this->get('/helfende-hand');

    $response->assertStatus(200);
});
