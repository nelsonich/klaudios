<?php

namespace App\Models\Games;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Game extends Model
{
    protected $table = "games";

    protected $fillable = [
        "question",
        "image",
        "game_category_id",
    ];

    public function getGameAnswers()
    {
        return $this->hasMany(GameAnswer::class, 'game_id', 'id');
    }

    public function getGameRightAnswer()
    {
        return $this->hasOne(RightAnswer::class, 'game_id', 'id');
    }

    public function getUserGameRightAnswer()
    {
        return $this->hasOne(UserRightAnswer::class, 'game_id', 'id')->where('user_id', Auth::id());
    }

    public function getUserGameWrongAnswer()
    {
        return $this->hasMany(UserWrongAnswer::class, 'game_id', 'id')->where('user_id', Auth::id());
    }
}
