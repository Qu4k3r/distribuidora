<?php

namespace App\Packages\Produto\Repository;

use App\Packages\Base\Repository\Eloquent\EloquentAbstractRepository;
use App\Packages\Produto\Domain\Model\Produto;

class ProdutoRepository extends EloquentAbstractRepository
{
    protected string $entity = Produto::class;
}
