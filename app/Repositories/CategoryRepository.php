<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Support\Collection;

class CategoryRepository extends BaseRepository

{
    public function model()
    {
        return Category::class;
    }

    public function index()
    {
        return $this->model->orderBy('created_at', 'DESC')->paginate(10);
    }

    public function indexOnlyChild()
    {
        return $this->model->where('parent', '!=', '0')->orderBy('created_at', 'DESC')->paginate(10);
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

    public function getListCategory()
    {
        return $this->model->with('children', 'products', 'children.products.productImages', 'products.brands', 'children.products.brands')->where('parent', 0)->get();
    }

    public function getListCategoryExcludeId($id)
    {
        return $this->model->where('id', '!=', $id)->get();
    }

    public function productByCategory($slug, $filter = [])
    {
        $query = $this->model->with('children', 'products', 'children.products.productImages', 'products.brands', 'children.products.brands')->where('slug', $slug);

        if (isset($filter['code'])) {
            $query->where('payment.payment_code', 'like', '%' . $filter['code'] . '%');
        }

        return $query->first();
    }

    public function productSale($slug)
    {
        return $this->model->with('products')->where('slug', $slug)->first();
    }
}
