<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    use HasFactory;
    //atributos
    protected $fillable = [
    'titulo',
    'descricao',
    'setor',
    'remuneracao',
    'empresa'
    ];
}
