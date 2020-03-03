<?php

namespace App\Models\Terms;

use Illuminate\Database\Eloquent\Model;

class TermsAndConditions extends Model
{
    protected $table = "terms_and_conditions";

    protected $fillable = [
        "description"
    ];
}
