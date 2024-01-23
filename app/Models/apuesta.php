<?php

namespace App\Models; // Debe ir aquí

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apuesta extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        // Agrega otros campos necesarios aquí
    ];

    protected $casts = [
        'user_id' => 'integer',
        // Agrega otros campos con tipos de dato aquí
    ];
}
