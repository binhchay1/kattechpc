<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'image',
        'code',
        'status',
        'price',
    ];
    
    public function category()
    {
        return $this-> belongsTo(
            'App\Models\Category',
            'category_id',
            'id');
    }
    
    public function getRouteKeyName()
    {
        return 'slug';
    }
    
}
