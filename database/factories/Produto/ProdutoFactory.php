<?php

namespace Database\Factories\Produto;

use App\Packages\Produto\Domain\Model\Produto;
use App\Packages\Produto\Domain\Model\TipoProduto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutoFactory extends Factory
{
    protected $model = Produto::class;
    public function definition(): array
    {
        return [
            'codigo' => (string) $this->faker->randomNumber(7, true),
            'descricao' => $this->faker->realText(30),
            'quantidade' => $this->faker->randomNumber(3),
            'tipo' => $this->faker->randomElement([TipoProduto::BIBLIA_SAGRADA]),
            'valor' => $this->faker->randomNumber(4),
        ];
    }
}
