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
        return $this->model->with('category')->orderBy('created_at', 'DESC')->paginate(10);
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

    public function productDetail($slug)
    {
        return $this->model->where('slug', $slug)->first();
    }

    public function getListKeyboard()
    {
        return $this->model->where('category_id', 'Bàn phím')->get();
    }

    public function getListLaptop()
    {
        return $this->model->where('category_id', 'Laptop')->get();
    }

    public function getListCase()
    {
        return $this->model->where('category_id', 'Case')->get();
    }

    public function getProductRelated($category, $id)
    {
        return $this->model->where('category_id', $category)->where('id', '!=', $id)->take(4)->get();
    }
}
