<?php

namespace App\Packages\User\Facade;

use App\Models\LaravelUser;

class UserFacade
{
    public function getUserName(LaravelUser $user): string
    {
        return $user->name;
    }
}
