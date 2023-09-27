<?php

namespace App\Packages\Endereco\Domain\Model;

use App\Packages\Igreja\Domain\Model\Igreja;
use App\Packages\Usuario\Domain\Model\Usuario;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Endereco extends Model
{
    use HasUuids, HasFactory;

    protected $fillable = [
        'bairro',
        'rua',
        'numero',
        'complemento',
        'cep',
    ];

    public function igreja(): HasOne
    {
        return $this->hasOne(Igreja::class);
    }

    public function usuarios(): HasMany
    {
        return $this->hasMany(Usuario::class);
    }
}
