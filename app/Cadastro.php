<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    public $timestamps = false;
    protected $table = 'cadastro';
    protected $fillable = [
        'nome',
        'genero',
        'endereco',
        'numero',
        'bairro',
        'cidade',
        'cep',
        'estado',
        'referencia',
        'rg',
        'expedidor',
        'cpf',
        'certidao_nascimento',
        'religiao',
        'tamanho_camiseta',
        'nome_pai',
        'telefone_pai',
        'email_pai',
        'nome_mae',
        'telefone_mae',
        'email_mae',
        'responsabilidade'        
    ];

    public function saude()
    {
        return $this->hasOne(Saude::class, 'id_cadastro','id');
    }
}
