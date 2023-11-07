<?php

namespace App\Packages\User\Domain\Model;

use Database\Factories\Usuario\UsuarioFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authentication;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/** @property string $name */
/** @property string $email */
/** @property string $phoneNumber */
/** @property string $password */
class User extends Authentication
{
    use HasUuids;
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'password',
        'address_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class);
    }

    /** Create a new factory instance for the model.*/
    protected static function newFactory(): Factory
    {
        return UsuarioFactory::new();
    }
}
