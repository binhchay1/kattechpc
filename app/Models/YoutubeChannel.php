<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YoutubeChannel extends Model
{
    use HasFactory;

    protected $table ='youtube_channel';

    protected $fillable = [
        'title',
        'link',
        'thumbnail'
    ];
}
