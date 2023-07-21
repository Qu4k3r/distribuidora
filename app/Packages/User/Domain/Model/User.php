<?php

namespace App\Packages\User\Domain\Model;

use Illuminate\Foundation\Auth\User as Authentication;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/** @property string $name */
/** @property string $email */
/** @property string $phoneNumber */
/** @property string $password */
class User extends Authentication
{
    use HasUuids, HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'phone_number',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
