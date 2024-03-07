<?php

namespace App\Repositories;

use App\Models\Warehouse;
use Illuminate\Support\Facades\DB;

class WarehouseRepository extends BaseRepository

{
    public function model()
    {
       return Warehouse::class;
    }
    
    public function index()
    {
        return $this->model->orderBy('created_at', 'DESC')->paginate(10);
    }
}
