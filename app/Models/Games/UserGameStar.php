<?php

namespace App\Models\Games;

use Illuminate\Database\Eloquent\Model;

class UserGameStar extends Model
{
    protected $table = "user_game_stars";

    protected $fillable = [
        "user_id",
        "stars",
    ];
}
