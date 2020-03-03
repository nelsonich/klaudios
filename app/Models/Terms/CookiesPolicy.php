<?php

namespace App\Models\Terms;

use Illuminate\Database\Eloquent\Model;

class CookiesPolicy extends Model
{
    protected $table = "cookies_policies";

    protected $fillable = [
        "description",
        "lang",
    ];
}
