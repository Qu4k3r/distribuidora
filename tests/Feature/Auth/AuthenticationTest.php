<?php

use App\Packages\User\Domain\Model\Address;
use App\Packages\User\Domain\Model\User;
use App\Providers\RouteServiceProvider;
use Tests\TestCase;

test('login screen can be rendered', function () {
    $response = $this->get('/login');

    $response->assertStatus(200);
});

test('users can authenticate using the login screen', function () {
    // @todo: Fix this test using factories
    /** @var TestCase $this */
    $address = new Address([
        'street' => 'Rua dos bobos numero 0',
        'neighbourhood' => 'Vila do Esmero',
        'state' => 'RJ',
        'city' => 'Rio de Janeiro'
    ]);
    $address->save();
    $user = new User([
        'name' => 'Neves',
        'email' => 'fake@bol.com.br',
        'phone_number' => '11999999996',
        'address_id' => $address->getKey(),
        'password' => 'password',
    ]);
    $user->save();

    $response = $this->post('/login', [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $this->assertAuthenticated();
    $response->assertRedirect(RouteServiceProvider::HOME);
});

test('users can not authenticate with invalid password', function () {
    $user = User::factory()->create();

    $this->post('/login', [
        'email' => $user->email,
        'password' => 'wrong-password',
    ]);

    $this->assertGuest();
});
