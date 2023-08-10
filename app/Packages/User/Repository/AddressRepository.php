<?php

namespace App\Packages\User\Repository;

use App\Packages\Base\Repository\Eloquent\EloquentAbstractRepository;
use App\Packages\User\Domain\Model\Address;

class AddressRepository extends EloquentAbstractRepository
{
    protected string $entityName = Address::class;
}
