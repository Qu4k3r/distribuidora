<?php

namespace App\Packages\Usuario\Domain\Model;

use App\Packages\Endereco\Domain\Model\Endereco;
use Database\Factories\Usuario\UsuarioFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authentication;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/** @property string $nome */
/** @property string $email */
/** @property string $telefone */
class Usuario extends Authentication
{
    use HasUuids, HasFactory, HasApiTokens, Notifiable;

    protected $fillable = [
        'igreja_id',
        'nome',
        'documento_principal',
        'email',
        'telefone',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function endereco(): BelongsTo
    {
        return $this->belongsTo(Endereco::class);
    }

    protected static function newFactory(): Factory
    {
        return UsuarioFactory::new();
    }
}
