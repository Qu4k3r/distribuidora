<?php

namespace Database\Factories\Igreja;

use App\Packages\Igreja\Domain\Model\Igreja;
use Illuminate\Database\Eloquent\Factories\Factory;

class IgrejaFactory extends Factory
{
    protected $model = Igreja::class;
    public function definition(): array
    {
        return [
            'endereco_id' => null,
            'codigo' => $this->faker->realText(12),
            'localidade' => $this->faker->city(),
            'complemento' => $this->faker->realText(20),
        ];
    }
}
