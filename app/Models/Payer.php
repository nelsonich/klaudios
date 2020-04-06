<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payer extends Model
{
    protected $fillable = [
        "user_id",
        "payer_id",
        "email",
        "payer_status",
        "first_name",
        "last_name",
        "country_code",
        "currency_code",
        "amt",
        "time_stamp",
    ];
}
