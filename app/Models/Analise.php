<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Analise extends Model
{
    public $table = 'analises';

    public $fillable = [
        'data',
        'local',
        'profundidade',
        'pH',
        'fosforo',
        'potassio',
        'calcio',
        'magnesio',
        'aluminio',
        'soma_bases',
        'acidez_potencial',
        'mat_organica',
        'prem',
        'teor_argila',
        'produtor_id',
        'user_id',
    ];
}
