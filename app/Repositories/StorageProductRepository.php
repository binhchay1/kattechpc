<?php
namespace App\Repositories;

use App\Models\ProductStorage;

class StorageProductRepository extends BaseRepository
{
    public function model()
    {
        return ProductStorage::class;
    }
    
    public function create($input)
    {
        return $this->model->create($input);
    }
}
