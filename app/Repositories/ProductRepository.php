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
        return $this->model->orderBy('created_at', 'DESC')->paginate(10);
    }

    public function store($input)
    {
        return $this->model->create($input);
    }

    public function show($id)
    {
        return $this->model->where('id', $id)->first();
    }

    public function update($input, $id)
    {
        return $this->model->where('id', $id)->update($input);
    }

    public function destroy($id)
    {
        return $this->model->where('id', $id)->delete();
    }

    public function productDetail($name)
    {
        return $this->model->where('name', $name)->first();
    }

    public function getListKeyboard()
    {
        return $this->model->where('category', 'Bàn phím')->get();
    }

    public function getListLaptop()
    {
        return $this->model->where('category', 'Laptop')->get();
    }

    public function getListCase()
    {
        return $this->model->where('category', 'Case')->get();
    }

    public function getProductRelated($category, $id)
    {
        return $this->model->where('category', $category)->where('id', '!=', $id)->take(4)->get();
    }
}
