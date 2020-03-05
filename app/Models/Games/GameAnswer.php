<?php

namespace App\Models\Games;

use Illuminate\Database\Eloquent\Model;

class GameAnswer extends Model
{
    protected $table = "game_answers";

    protected $fillable = [
        "answer",
        "image",
        "game_id",
    ];
}
