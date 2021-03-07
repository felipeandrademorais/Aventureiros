<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saude extends Model
{
    public $timestamps = false;
    protected $table = 'saude';
    protected $fillable = [
        'id_cadastro',
        'doencas',
        'cardiaco',
        'cardiaco_text',
        'alergia_medicamento',
        'alergia_medicamento_text',
        'lactose',
        'lactose_text',
        'deficiencia',
        'deficiencia_text',
        'transfusao',
        'alergia_pele',
        'alergia_pele_text',
        'desmaio',
        'desmaio_text',
        'psicologicos',
        'psicologicos_text',
        'alergia',
        'alergia_text',
        'ferimento',
        'fratura',
        'fratura_text',
        'cirurgia',
        'cirurgia_text',
        'internacao_text',
        'sangue',
        'fator_rh',
        'responsabilidade'
    ];

     public function cadastro()
    {
        return $this->belongsTo(Cadastro::class, 'id_cadastro', 'id');
    }
}
