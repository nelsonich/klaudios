<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StaticInformation extends Model
{
    protected $table = "static_information";
    protected $fillable = [
        "logo",
        "description",
        "place",
        "phone",
        "email",
        "instagram_link",
        "facebook_link",
        "twitter_link",
    ];
}
