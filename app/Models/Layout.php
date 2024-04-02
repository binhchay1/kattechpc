<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layout extends Model
{
    use HasFactory;
    protected $table = 'layout';
    protected $fillable =[
        'big_thumbnail',
        'small_thumbnail_1',
        'small_thumbnail_2',
        'small_thumbnail_3',
        'small_thumbnail_4',
        'small_thumbnail_5',
        'small_thumbnail_6',
        'flash_sale_list_thumbnail',
        'flash_sale_timer',
        'hot_sale_big_thumbnail',
        'hot_sale_list_thumbnail',
        'big_banner_thumbnail',
        'small_banner_thumbnail_1',
        'small_banner_thumbnail_2',
    ];
}
