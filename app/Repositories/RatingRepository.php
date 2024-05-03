<?php

namespace App\Repositories;

use App\Models\Rating;

class RatingRepository extends BaseRepository
{
    public function model()
    {
        return Rating::class;
    }
    
    public function index()
    {
        return $this->model->with('product', 'user')->orderBy('created_at', 'desc')->get();
    }
    
    public function store($input)
    {
        return $this->model->create($input);
    }
    
    public function show()
    {
        return $this->model->with('product', 'user')->first();
    
    }
}
