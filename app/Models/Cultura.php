<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cultura extends Model
{
    public $table = 'cultura';

    public $fillable = [
        'nome',
        'familia',
        'saturacao_al',
        'indice_x',
        'saturacao_bases',
        'producao_esperada',
        'espacamento',
        'calagem',
        'adubacao_org',
        'observacoes',
        'parcelamento_npk',
        'obs_quadro_npk',
    ];
}
