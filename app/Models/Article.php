<?php

namespace App\Models;

use App\Models\Type;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'description',
        'photo',
        'numero_service',
        'user_id',
        'type_id',
        'etat',
        'tarif_1',
        'tarif_2',
        'tarif_3',
        'point_depart',
        'point_arrivé',
        'stationement',
        'poids_min',
        'poids_max',
        'dure_1',
        'dure_2',
        'dure_3',
        'centres',
        'voitures',
        'jour_max',
        'references',
        'jour',
        'envoyeur',
    ];
    public function type()
    {
        return $this->belongsTo(Type::class);
    }    
}
