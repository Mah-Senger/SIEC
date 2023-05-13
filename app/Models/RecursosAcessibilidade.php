<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecursosAcessibilidade extends Model
{
    use HasFactory;

    protected $fillable=[
        'funcLibras',
        'banheirosAcessiveis',
        'corredoresAcessiveis',
        'rampas',
        'elevadores',
        'contBraile',
        'espacoAmploParaLocomocao',
    ];
}