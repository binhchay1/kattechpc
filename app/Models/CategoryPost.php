<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CategoryPost extends Model
{
    use HasFactory;
    use Sluggable;
    
    
    protected $fillable = [
        'name', 'slug',
    ];
    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    
    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($category) {
            $category->slug = Str::slug($category->name);
            
            // Ensure slug uniqueness
            $originalSlug = $slug = $category->slug;
            $count = 1;
            
            while (static::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $count++;
            }
            
            $category->slug = $slug;
        });
    }
    
    public function products()
    {
        return $this->hasMany('App\Models\Products', 'category_id', 'id');
    }
    
    public function posts()
    {
        return $this->hasMany('App\Models\Post', 'category_id', 'id');
    }
}
