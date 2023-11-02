<?php

namespace Database\Seeders\Igreja;

use App\Packages\Igreja\Domain\Model\Igreja;
use Illuminate\Database\Seeder;

class IgrejaSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->seedIgrejas();
    }

    private function seedIgrejas(): void
    {
        $igrejas = fopen(storage_path('seeds/igrejas/igrejas.tsv'), 'r');

        // Skip header
        fgets($igrejas);

        while (($igreja = fgetcsv($igrejas, 0, "\t")) !== false) {
            $igrejaSistema = $this->getIgrejaSistema($igreja[1]);
            if ($igrejaSistema instanceof Igreja) {
                continue;
            }

            Igreja::factory()->create([
                'endereco_id' => null,
                'codigo' => $igreja[0],
                'localidade' => $igreja[1],
                'complemento' => $igreja[2] ?? null,
            ]);
        }
        fclose($igrejas);
    }

    private function getIgrejaSistema(string $codigo): ?Igreja
    {
        return Igreja::where('codigo', $codigo)->first();
    }
}
