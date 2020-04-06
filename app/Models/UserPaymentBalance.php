<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPaymentBalance extends Model
{
    protected $fillable = [
        "user_id",
        "balance",
    ];
}
