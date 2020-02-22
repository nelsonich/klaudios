<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class News extends Model
{
    protected $table = "news";
    protected $fillable = [
        "title",
        "description",
        "image",
    ];

    public function getNewsLikes()
    {
        return $this->hasMany(LikeNews::class, 'news_id', 'id')->where('user_id', Auth::id());
    }

    public function getNewsLikesCounts()
    {
        return $this->hasMany(LikeNews::class, 'news_id', 'id');
    }
}
