<?php

namespace App\Packages\Usuario\Domain\Model;

use App\Packages\Endereco\Domain\Model\Endereco;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authentication;

/** @property string $nome */
/** @property string $email */
/** @property string $telefone */
class Usuario extends Authentication
{
    use HasUuids, HasFactory;

    // @todo: modificar migration na branch authentication
    protected $fillable = [
        'igreja_id',
        'nome',
        'documento_principal',
        'email',
        'telefone',
    ];

    public function endereco(): BelongsTo
    {
        return $this->belongsTo(Endereco::class);
    }
}
