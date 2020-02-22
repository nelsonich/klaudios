<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestQuote extends Model
{
    protected $table = "request_quotes";
    protected $fillable = [
        "firstName",
        "lastName",
        "subject",
        "message",
    ];
}
