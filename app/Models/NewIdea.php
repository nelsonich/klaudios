<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewIdea extends Model
{
    protected $table = "new_ideas";

    protected $fillable = [
        "user_id",
        "is_game",
    ];
}
