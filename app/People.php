<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = [
        'nome',
        'rg',
        'cpf',
        'tel',
        'cel',
        'cep',
        'endereco',
        'num',
        'uf',
        'cidade',
        'bairro'
    ];
}
