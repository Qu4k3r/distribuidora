<?php

namespace App\Packages\Produto\Domain\Model;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasUuids, HasFactory;

    protected $fillable = [
        'nome',
        'codigo',
        'preco',
        'descricao',
    ];
}
