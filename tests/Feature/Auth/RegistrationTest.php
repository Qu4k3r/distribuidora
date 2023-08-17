<?php

use App\Packages\User\Domain\Model\Address;
use App\Providers\RouteServiceProvider;

test('registration screen can be rendered', function () {
    $response = $this->get('/register');

    $response->assertStatus(200);
});

test('new users can register', function () {
    $address = Address::factory()->create();
    $response = $this->post('/register', [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'phoneNumber' => '11987654321',
        'password' => 'password',
        'password_confirmation' => 'password',
        'addressId' => $address->getKey(),
    ]);

    $this->assertAuthenticated();
    $response->assertRedirect(RouteServiceProvider::HOME);
});
