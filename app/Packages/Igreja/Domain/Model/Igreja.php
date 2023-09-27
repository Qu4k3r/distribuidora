<?php

namespace App\Packages\Igreja\Domain\Model;

use App\Packages\Endereco\Domain\Model\Endereco;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Igreja extends Model
{
    use HasUuids, HasFactory;

    protected array $fillable = [
        'endereco_id',
        'apelido',
        'codigo',
    ];

    public function endereco(): BelongsTo
    {
        return $this->belongsTo(Endereco::class);
    }
}
