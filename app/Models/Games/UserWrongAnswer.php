<?php

namespace App\Models\Games;

use Illuminate\Database\Eloquent\Model;

class UserWrongAnswer extends Model
{
    protected $table = "user_wrong_answers";

    protected $fillable = [
        "user_id",
        "game_id",
        "answer_id",
    ];
}
