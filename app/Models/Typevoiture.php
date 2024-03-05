<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typevoiture extends Model
{
    use HasFactory;

    protected $table = 'typevoiture';
    protected $fillable = [
        'NoTV',
        'NomTV',
        'Moteur',
    ];
}
