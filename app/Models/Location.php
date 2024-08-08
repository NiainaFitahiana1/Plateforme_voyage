<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable=[
        "id",
        "voiture",
        "article_id",
        "jour_max",
        "prix_1",
        "prix_2",
    ];
}
