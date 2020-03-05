<?php

namespace App\Models\Games;

use Illuminate\Database\Eloquent\Model;

class UserRightAnswer extends Model
{
    protected $table = "user_right_answers";

    protected $fillable = [
        "user_id",
        "game_id",
        "answer_id"
    ];
}
