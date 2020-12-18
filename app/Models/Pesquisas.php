<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesquisas extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'telefone'
    ];
}
