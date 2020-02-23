<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Features extends Model
{
    protected $table = "features";

    protected $fillable = [
        "title",
        "description",
        "image",
    ];
}
