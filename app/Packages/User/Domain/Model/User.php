<?php

namespace App\Packages\User\Domain\Model;

use Illuminate\Database\Eloquent\Concerns\HasUuids;

/**
 * @property string $name
 */
class User
{
    use HasUuids;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
