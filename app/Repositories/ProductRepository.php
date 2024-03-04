<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository extends BaseRepository

{
    public function model()
    {
        return Product::class;
    }
    
    public function index()
    {
        return $this->model->orderBy('created_at', 'DESC')->get();
    }
    
    public function store($input)
    {
        return $this->model->create($input);
    }
    
}



