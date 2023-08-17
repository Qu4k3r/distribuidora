<?php

namespace Database\Factories;

use App\Packages\User\Domain\Model\Address;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

/** @extends Factory<Address> */
class AddressFactory extends Factory
{
    /** @var class-string<Model> */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'street' => fake()->streetAddress(),
            'neighbourhood' => fake()->streetName(),
            'state' => 'São Paulo',
            'city' => fake()->city(),
        ];
    }
}
