<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imoveis extends Model
{
    protected $fillable = [
        'logradouro',
        'numero',
        'bairro',
        'complemento',
        'pessoa_id',
    ];
    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class, 'pessoa_id');
    }
}
