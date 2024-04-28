<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryFillter extends Model
{
    use HasFactory;
    protected $table = 'category_fillters';

    protected $fillable = [
        'name', 'keyword','category_id'
    ];

    public function categories()
    {
        return $this->hasMany(Category::class, 'category_id', 'id');
    }


}
