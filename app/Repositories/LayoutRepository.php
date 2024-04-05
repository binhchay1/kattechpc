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

    public function store($input)
    {
        return $this->model->create($input);
    }

    public function update($id, $input)
    {
        return $this->model->where('id', $id)->update($input);
    }

    public function getListLayout()
    {
        return $this->model->first();
    }

    public function getSlide()
    {
        return $this->model->select('slide_thumbnail')->first();
    }

    public function getFlashSale()
    {
        return $this->model->select('flash_sale_timer', 'flash_sale_list_product_id')->first();
    }
}
