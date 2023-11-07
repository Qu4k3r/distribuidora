<?php

namespace App\Packages\Produto\Command;

use App\Packages\Produto\Domain\Model\Biblia;
use App\Packages\Produto\Domain\Model\Produto;
use App\Packages\Produto\Domain\Model\TipoProduto;
use Illuminate\Console\Command;

class TesteCommand extends Command
{
    protected $signature = 'produto:teste';

    public function handle()
    {
        $biblia = Produto::factory()->make();
        dd($biblia->tipo);
    }
}
