<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    protected $fillable= [
        "titel",
        "description",
        "author",
        "category_id",
        "user_id",
    ];
}
