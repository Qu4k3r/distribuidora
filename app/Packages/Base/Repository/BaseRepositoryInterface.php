<?php

namespace App\Packages\Base\Repository;

interface BaseRepositoryInterface
{
    public function save(array $data);

    public function update(array $data, int $id);

    public function delete(int $id);

    public function find(int $id);

    public function all();
}
