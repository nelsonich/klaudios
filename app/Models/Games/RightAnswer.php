<?php

namespace App\Models\Games;

use Illuminate\Database\Eloquent\Model;

class RightAnswer extends Model
{
    protected $table = "right_answers";

    protected $fillable = [
        "game_id",
        "answer_id",
    ];
}
