<?php

namespace Database\Seeders\Produto;

use App\Packages\Usuario\Domain\Model\Usuario;
use Illuminate\Database\Seeder;

class BibliaSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->seedProdutos();
    }

    private function seedUser(): void
    {
        Usuario::factory()->create([
            'name' => 'Test User',
            'email' => '',
        ]);
    }

    private function seedProdutos(): void
    {
        $this->seedBiblia();
    }

    private function seedBiblia(): void
    {
        Biblia::factory()->create([
            'nome' => 'Bíblia Sagrada',
            'codigo' => 'BIBLIA',
            'preco' => 10000,
            'descricao' => 'Bíblia Sagrada',
            'tipo' => 'biblia',
        ]);
    }
}
