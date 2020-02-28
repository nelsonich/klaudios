<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class LikeNews extends Model
{
    protected $table = "like_news";
    protected $fillable = [
        "user_id",
        "news_id",
    ];

    public function getNewsLikedUser()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
