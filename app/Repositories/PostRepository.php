<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository extends BaseRepository
{

    public function model()
    {
        return Post::class;
    }

    public function index()
    {
        return $this->model->with('user', 'category')->orderBy('created_at', 'DESC')->paginate(10);
    }

    public function create($input)
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

}
