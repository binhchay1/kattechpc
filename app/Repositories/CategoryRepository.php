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

    public function indexOnlyChild()
    {
        return $this->model->where('parent', '!=', '0')->orderBy('created_at', 'DESC')->paginate(10);
    }

    public function indexOnlyParent()
    {
        return $this->model->where('parent', '0')->orderBy('name', 'ASC')->get();
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
        return $this->model
            ->with(
                'children',
                'products',
                'children.products',
                'children.products.productImages',
                'children.products.brands',
                'children.categoryFilter'
            )
            ->where('parent', 0)->get();
    }

    public function getListCategoryExcludeId($id)
    {
        return $this->model->where('id', '!=', $id)->get();
    }

    public function productByCategory($slug, $isParent, $filter = [])
    {
        if ($isParent == 1) {
            $query = $this->model->with('children', 'products', 'children.products.productImages', 'products.brands', 'children.products.brands')->where('slug', $slug);

            if (isset($filter['sort'])) {
                if ($filter['sort'] == 'new') {
                    $query->whereRelation(
                        'products',
                        function ($query) {
                            $query->orderBy('products.created_at', 'desc');
                        }
                    );
                }

                if ($filter['sort'] == 'price-asc') {
                    $query->whereRelation(
                        'products',
                        function ($query) {
                            $query->orderBy('products.price', 'asc');
                        }
                    );
                }

                if ($filter['sort'] == 'price-desc') {
                    $query->whereRelation(
                        'products',
                        function ($query) {
                            $query->orderBy('products.price', 'desc');
                        }
                    );
                }

                if ($filter['sort'] == 'name') {
                    $query->whereRelation(
                        'products',
                        function ($query) {
                            $query->orderBy('products.name', 'asc');
                        }
                    );
                }
            }
        } else {
            $query = $this->model->with('productChildren')->where('slug', $slug);

            if (isset($filter['sort'])) {
                if ($filter['sort'] == 'new') {
                    $query->whereRelation(
                        'productChildren',
                        function ($query) {
                            $query->orderBy('products.created_at', 'desc');
                        }
                    );
                }

                if ($filter['sort'] == 'price-asc') {
                    $query->whereRelation(
                        'productChildren',
                        function ($query) {
                            $query->orderBy('products.price', 'asc');
                        }
                    );
                }

                if ($filter['sort'] == 'price-desc') {
                    $query->whereRelation(
                        'productChildren',
                        function ($query) {
                            $query->orderBy('products.price', 'desc');
                        }
                    );
                }

                if ($filter['sort'] == 'name') {
                    $query->whereRelation(
                        'productChildren',
                        function ($query) {
                            $query->orderBy('products.name', 'asc');
                        }
                    );
                }
            }
        }

        foreach ($filter as $key => $value) {
            if ($key == 'price' or $key == 'sort') {
                continue;
            }
        }

        return $query->first();
    }

    public function productSale($slug, $isParent)
    {
        if ($isParent == 1) {
            return $this->model->with('products')->where('slug', $slug)->first();
        } else {
            return $this->model->with('productChildren')->where('slug', $slug)->first();
        }
    }

    public function checkIsParent($slug)
    {
        $query = $this->model->where('slug', $slug)->first();
        if (!$query) {
            return 0;
        }

        if ($query->parent == 0) {
            $status = 1;
        } else {
            $status = 2;
        }

        return $status;
    }
}
