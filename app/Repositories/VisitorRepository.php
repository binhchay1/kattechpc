<?php

namespace App\Repositories;

use App\Models\Visitor;

class VisitorRepository extends BaseRepository

{
    public function model()
    {
        return Visitor::class;
    }

    public function getVisitorByIp($ip, $month, $year) {
        return $this->model->where('ip_address', $ip)->whereMonth('month', $month)->whereYear('year', $year)->first();
    }

    public function create($input)
    {
        return $this->model->create($input);
    }

    public function update($input, $id)
    {
        return $this->model->where('id', $id)->update($input);
    }
}
