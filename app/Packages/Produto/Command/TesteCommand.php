<?php

namespace App\Packages\Produto\Command;

use App\Packages\Produto\Domain\Model\Biblia;
use Illuminate\Console\Command;

class TesteCommand extends Command
{
    protected $signature = 'produto:teste';

    public function handle()
    {
        dd(class_basename($this));
        $biblia = Biblia::factory()->make([
            'nome' => 'Bíblia Sagrada',
            'codigo' => 'BIBLIA',
            'preco' => 10000,
            'descricao' => 'Bíblia Sagrada',
        ]);
        dd($biblia->id);
        echo strtolower(class_basename($this)).PHP_EOL;
    }
}
