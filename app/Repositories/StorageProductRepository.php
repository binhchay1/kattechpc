<?php

namespace App\Repositories;

use App\Models\StorageProduct;

class StorageProductRepository extends BaseRepository
{
    public function model()
    {
        return StorageProduct::class;
    }

    public function create($input)
    {
        return $this->model->create($input);
    }

    public function getListProductById($id)
    {
        return $this->model->where('storage_id', $id)->get();
    }
}
