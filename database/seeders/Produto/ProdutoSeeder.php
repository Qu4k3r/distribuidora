<?php

namespace Database\Seeders\Produto;

use App\Packages\Produto\Domain\Model\Biblia;
use App\Packages\Produto\Domain\Model\TipoProduto;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->seedBiblia();
    }

    private function seedBiblia(): void
    {
        $biblias = fopen(storage_path('seeds/produtos/biblias.tsv'), 'r');
        // Skip header
        fgets($biblias);

        while (($biblia = fgetcsv($biblias, 0, "\t")) !== false) {
            Biblia::factory()->create([
                'codigo' => $biblia[1],
                'descricao' => $biblia[2],
                'quantidade' => $biblia[0],
                'tipo' => TipoProduto::BIBLIA_SAGRADA,
                'valor' => $biblia[3],
            ]);
        }
        fclose($biblias);
    }
}
