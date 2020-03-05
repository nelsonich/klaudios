<?php

namespace App\Models\Games;

use Illuminate\Database\Eloquent\Model;

class GameCategory extends Model
{
    protected $table = "game_categories";

    protected $fillable = [
        "name",
        "image",
        "complexity_id"
    ];

    public function getCategoryGames()
    {
        return $this->hasMany(Game::class, 'game_category_id', 'id')->with('getGameAnswers', 'getUserGameRightAnswer', 'getUserGameWrongAnswer');
    }
}
