<?php

namespace Database\Factories\Endereco;

use App\Packages\Endereco\Domain\Model\Endereco;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnderecoFactory extends Factory
{
    protected $model = Endereco::class;
    public function definition(): array
    {
        return [
            'cep' => $this->faker->postcode,
            'bairro' => $this->faker->city,
            'rua' => $this->faker->streetName,
            'numero' => $this->faker->numberBetween(1, 1000),
            'complemento' => $this->faker->realText(20),
        ];
    }
}
