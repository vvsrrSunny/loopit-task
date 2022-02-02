<?php

use App\Models\Car;
use App\Models\User;

test('non users cannot get the list of available cars', function () {
    $this->getJson(route('dashboard'))
    ->assertStatus(401);
});

test('users can get the list of available cars', function () {
    $user = User::factory()->create();
    Car::factory()->count(7)->create();

    $this->actingAs($user)->getJson(route('dashboard'))
    ->assertOk()
    ->assertJsonCount(7);
});

