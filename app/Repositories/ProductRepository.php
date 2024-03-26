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
        return $this->model->with('category', 'productImages')->orderBy('created_at', 'DESC')->paginate(10);
    }

    public function store($input)
    {
        return $this->model->create($input);
    }

    public function show($id)
    {
        return $this->model->with( 'productImages')->where('id', $id)->first();
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
        return $this->model->with('productImages')->where('slug', $slug)->first();
    }

    public function getProductRelated($category_id, $product_id)
    {
        return $this->model->where('category_id', $category_id)->where('id', '!=', $product_id)->take(4)->get();
    }
}
