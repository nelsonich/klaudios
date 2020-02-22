<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LikeNews extends Model
{
    protected $table = "like_news";
    protected $fillable = [
        "user_id",
        "news_id",
    ];
}
