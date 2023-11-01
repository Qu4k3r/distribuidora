<?php

namespace Database\Seeders\Produto;

use App\Packages\Produto\Domain\Model\Produto;
use App\Packages\Produto\Domain\Model\TipoProduto;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->seedProdutos();
    }

    private function seedProdutos(): void
    {
        collect(TipoProduto::cases())->each(function (TipoProduto $tipoProduto) {
            $tipo = $tipoProduto->value;
            $produtos = fopen(storage_path("seeds/produtos/$tipo.tsv"), 'r');

            // Skip header
            fgets($produtos);

            while (($produto = fgetcsv($produtos, 0, "\t")) !== false) {
                $produtoSistema = $this->getProdutoSistema($produto[1]);
                if ($produtoSistema instanceof Produto) {
                    continue;
                }

                Produto::factory()->create([
                    'codigo' => $produto[1],
                    'descricao' => $produto[2],
                    'quantidade' => $produto[0],
                    'tipo' => $tipo,
                    'valor' => intval(floatval($produto[3]) * 100),
                ]);
            }
            fclose($produtos);
        });
    }

    private function getProdutoSistema(string $codigo): ?Produto
    {
        return Produto::where('codigo', $codigo)->first();
    }
}
