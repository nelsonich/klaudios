<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class NewsComment extends Model
{
    protected $table = "news_comments";
    protected $fillable = [
        "user_id",
        "news_id",
        "comment"
    ];

    public function getCommentedUser()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function getCommentLoves()
    {
        return $this->hasOne(NewsCommentLikes::class, 'comment_id', 'id');
    }
}
