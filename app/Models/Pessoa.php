<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = [
        'nome',
        'data_nascimento',
        'cpf',
        'sexo',
        'email',
        'telefone',
    ]; 
    public function imovel()
    {
        return $this->hasMany(Imoveis::class);
    }
}
