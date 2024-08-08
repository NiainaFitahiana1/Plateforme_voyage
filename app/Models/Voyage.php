<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Voyage extends Model
{
    use HasFactory;
    protected $fillable=[
        "article_id",
        "point_A",
        "point_A",
        "tarif_1",
        "tarif_3",
        "tarif_2",
    ];
        /**
         * Get the user associated with the Voyage
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasOne
         */
        public function voyages(): HasOne
        {
            return $this->hasOne(Article::class, 'article_id', 'id');
        }
    

}
