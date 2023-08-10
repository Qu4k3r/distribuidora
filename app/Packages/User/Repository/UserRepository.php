<?php

namespace App\Packages\User\Repository;

use App\Packages\Base\Repository\Eloquent\EloquentAbstractRepository;
use App\Packages\User\Domain\Model\User;
use Illuminate\Database\Eloquent\Model;

class UserRepository extends EloquentAbstractRepository
{
    protected string $entityName = User::class;
}
