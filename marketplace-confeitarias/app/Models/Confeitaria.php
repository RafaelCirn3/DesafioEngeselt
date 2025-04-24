<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Confeitaria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'latitude',
        'longitude',
        'cep',
        'rua',
        'numero',
        'bairro',
        'cidade',
        'estado',
        'telefone',
    ];

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}
