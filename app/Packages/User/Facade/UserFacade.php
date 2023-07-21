<?php

namespace App\Packages\User\Facade;

use App\Packages\User\Domain\Model\User;

class UserFacade
{
    public function getUserName(User $user): string
    {
        return $user->name;
    }
}
