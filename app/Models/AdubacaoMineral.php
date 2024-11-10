<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdubacaoMineral extends Model
{
    /** @use HasFactory<\Database\Factories\AdubacaoMineralFactory> */
    use HasFactory;

    public $table = 'adubacao_mineral';

    public $fillable = [
        'disponibilidade_nutriente',
        'p2o5_solo_argiloso',
        'p2o5_solo_medio',
        'p2o5_solo_arenoso',
        'k2o',
        'nitrogenio',
        'cultura_id',
    ];
}
