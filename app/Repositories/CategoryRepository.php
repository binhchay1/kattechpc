<?php

namespace App\Repositories;

use App\Models\Category;

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
        return $this->model->with('products', 'products.productImages')->get();
    }

    public function getListCategoryExcludeId($id)
    {
        return $this->model->where('id', '!=', $id)->get();
    }
    
    public function productByCategory($slug, $getPrice = null, $getSortBy = null)
    {
        $query = $this->model->with('products')->where('slug', $slug);
        if($getPrice == 'duoi-10trieu')
        {
            $query = $query->with(['products' => function ($query) {
                $query->where('products.new_price', '<', 10000000);
            }]);

        }if ($getPrice == 'tu-10trieu-15trieu')
        {
            $query = $query->with(['products' => function ($query) {
                $query->whereBetween('products.new_price',[10000000, 15000000] );
            }]);
        }if ($getPrice == 'tu-15trieu-20trieu')
        {
            $query = $query->with(['products' => function ($query) {
                $query->whereBetween('products.new_price',[15000000, 20000000] );
            }]);
        }if ($getPrice == 'tu-20trieu-30trieu')
        {
            $query = $query->with(['products' => function ($query) {
                $query->whereBetween('products.price',[200000000, 30000000] );
            }]);
        }if ($getPrice == 'tu-30trieu-50trieu')
        {
            $query = $query->with(['products' => function ($query) {
                $query->whereBetween('products.new_price',[30000000, 50000000] );
            }]);
        }if ($getPrice == 'tu-50trieu-100trieu')
        {
            $query = $query->with(['products' => function ($query) {
                $query->whereBetween('products.new_price',[50000000, 100000000] );
            }]);
        }if ($getPrice == 'tren-100trieu')
        {
            $query = $query->with(['products' => function ($query) {
                $query->where('products.new_price', '>', 100000000);
            }]);
        }
        if ($getSortBy == 'new')
        {
            $query = $query->with(['products' => function ($query) {
                $query->orderBy('created_at', 'desc');
            }]);
        }
        
       if ($getSortBy == 'price-desc')
        {
            $query = $query->with(['products' => function ($query) {
                $query->orderBy('products.new_price', 'desc');
            }]);
        }
        if ($getSortBy == 'price-asc')
        {
            $query = $query->with(['products' => function ($query) {
                $query->orderBy('products.new_price', 'asc');
            }]);
        }
    
        if ($getSortBy == 'name')
        {
            $query = $query->with(['products' => function ($query) {
                $query->orderBy('name');
            }]);
        }
        return $query->first();
    }
    
    public function productSale($slug)
    {
        return $this->model->with('products')->where('slug', $slug)->first();
    }
}
