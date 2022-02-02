<?php

use App\Models\User;
test('non registered users cannot view the dashboard', function () {
    $this->get(route('dashboard'))
        ->assertStatus(302);
});

test('registered users can view the dashboard', function () {
    $user = User::factory()->create();

    $this->actingAs($user)->get(route('dashboard'))
        ->assertStatus(200);
});
