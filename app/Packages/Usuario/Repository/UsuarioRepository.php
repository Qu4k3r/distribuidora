<?php

namespace App\Packages\Usuario\Repository;

use App\Packages\Base\Repository\Eloquent\EloquentAbstractRepository;
use App\Packages\Usuario\Domain\Model\Usuario;

class UsuarioRepository extends EloquentAbstractRepository
{
    protected string $entity = Usuario::class;
}
