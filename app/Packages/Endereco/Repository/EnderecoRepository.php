<?php

namespace App\Packages\Endereco\Repository;

use App\Packages\Base\Repository\Eloquent\EloquentAbstractRepository;
use App\Packages\Endereco\Domain\Model\Endereco;

class EnderecoRepository extends EloquentAbstractRepository
{
    protected string $entity = Endereco::class;
}
