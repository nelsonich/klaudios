<?php

namespace App\Models\Games;

use App\User;
use Illuminate\Database\Eloquent\Model;

class GameComplexity extends Model
{
    protected $table = "game_complexities";

    protected $fillable = [
        "name",
        "image",
    ];

    public function getGameCategories()
    {
        return $this->hasMany(GameCategory::class, 'complexity_id', 'id')->with('getCategoryGames');
    }
}
