<?php

namespace App\Packages\Produto\Domain\Model;

use Database\Factories\Produto\ProdutoFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasUuids, HasFactory;

    protected $fillable = [
        'codigo',
        'descricao',
        'quantidade',
        'tipo',
        'valor',
    ];

    protected static function newFactory(): Factory
    {
        return ProdutoFactory::new();
    }
}
