<?php

namespace App;

use App\Models\Games\RightAnswer;
use App\Models\Games\UserGameStar;
use App\Models\Games\UserRightAnswer;
use App\Models\Games\UserWrongAnswer;
use App\Models\NewIdea;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "role",
        'first_name',
        'last_name',
        'user_name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAuthGameStatus()
    {
        return $this->hasOne(NewIdea::class, 'user_id', 'id');
    }

    public function getUsersRightAnswers()
    {
        return $this->hasMany(UserRightAnswer::class, 'user_id', 'id');
    }

    public function getUsersWrongAnswers()
    {
        return $this->hasMany(UserWrongAnswer::class, 'user_id', 'id');
    }

    public function getGameStars()
    {
        return $this->hasOne(UserGameStar::class, 'user_id', 'id');
    }
}
