<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InteresseVagas extends Model
{
    use HasFactory;

    protected $fillable=[
        'idVaga',
        'idCandidato',
    ];
}
