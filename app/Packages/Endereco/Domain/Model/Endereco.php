<?php

namespace App\Packages\Endereco\Domain\Model;

use App\Packages\Igreja\Domain\Model\Igreja;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Endereco extends Model
{
    use HasUuids, HasFactory;

    protected $fillable = [
        'cep',
        'bairro',
        'rua',
        'numero',
        'complemento',
    ];

    public function igreja(): HasOne
    {
        return $this->hasOne(Igreja::class);
    }
}
