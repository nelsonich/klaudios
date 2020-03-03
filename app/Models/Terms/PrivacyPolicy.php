<?php

namespace App\Models\Terms;

use Illuminate\Database\Eloquent\Model;

class PrivacyPolicy extends Model
{
    protected $table = "privacy_policies";

    protected $fillable = [
        "description"
    ];
}
