<?php

namespace App\Packages\Igreja\Domain\Model;

use App\Packages\Endereco\Domain\Model\Endereco;
use Database\Factories\Igreja\IgrejaFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Igreja extends Model
{
    use HasUuids, HasFactory;

    protected $fillable = [
        'endereco_id',
        'codigo',
        'localidade',
        'complemento',
    ];

    public function endereco(): BelongsTo
    {
        return $this->belongsTo(Endereco::class);
    }

    protected static function newFactory(): Factory
    {
        return IgrejaFactory::new();
    }
}
