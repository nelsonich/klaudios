<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsCommentLikes extends Model
{
    protected $table = "news_comment_likes";
    protected $fillable = [
        "user_id",
        "comment_id"
    ];
}
