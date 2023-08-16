<?php

namespace App\Packages\User\Domain\Model;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** @property string $street */
/** @property string $neighbourhood */
/** @property string $state */
/** @property string $city */
class Address extends Model
{
    use HasUuids;
    use HasFactory;

    protected $fillable = [
        'street',
        'neighbourhood',
        'state',
        'city',
    ];

    public $timestamps = false;

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
