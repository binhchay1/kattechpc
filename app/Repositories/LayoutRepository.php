<?php

namespace App\Repositories;

use App\Models\Layout;

class LayoutRepository extends BaseRepository

{
    public function model()
    {
        return Layout::class;
    }

    public function index()
    {
        return $this->model->orderBy('created_at', 'DESC')->paginate(10);
    }
}
