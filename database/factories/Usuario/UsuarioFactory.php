<?php

namespace Database\Factories\Usuario;

use App\Packages\Usuario\Domain\Model\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * @extends Factory<Usuario>
 */
class UsuarioFactory extends Factory
{
    /** @var class-string<Model> */
    protected $model = Usuario::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $address = AddressFactory::new()->create();
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
            'phone_number' => fake()->phoneNumber(),
            'address_id' => $address->getKey(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
