<?php

namespace App\Packages\Igreja\Repository;

use App\Packages\Base\Repository\Eloquent\EloquentAbstractRepository;
use App\Packages\Igreja\Domain\Model\Igreja;

class IgrejaRepository extends EloquentAbstractRepository
{
    protected string $entity = Igreja::class;
}
