<?php

namespace App\Repositories;

use App\Models\Rating;

class RatingRepository extends BaseRepository
{
    public function model()
    {
        return Rating::class;
    }
    
    public function store($input)
    {
        return $this->model->create($input);
    }
}
