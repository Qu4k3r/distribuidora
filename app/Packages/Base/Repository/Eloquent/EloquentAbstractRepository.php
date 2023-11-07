<?php

namespace App\Packages\Base\Repository\Eloquent;

use App\Packages\Base\Repository\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

abstract class EloquentAbstractRepository implements BaseRepositoryInterface
{
    protected string $entity;
    private Model $model;

    public function __construct()
    {
        $this->model = new $this->entity;
    }

    public function save(array $data): Model
    {
        $this->model
            ->fill($data)
            ->saveOrFail();

        return $this->model;
    }

    public function update(array $data, int $id)
    {
        // TODO: Implement update() method.
    }

    public function delete(int $id)
    {
        // TODO: Implement delete() method.
    }

    public function find(int $id)
    {
        // TODO: Implement find() method.
    }

    public function all()
    {
        // TODO: Implement all() method.
    }
}
