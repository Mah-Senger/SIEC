<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HabilidadesVaga extends Model
{
    use HasFactory;

    protected $fillable=[
        'idVaga',
        'idHabilidade',
    ];
}
