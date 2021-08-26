<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = 'reserva';
    public $timestamps = true;

    /*
    protected $casts = [
        'price' => 'float'
    ];*/

    protected $fillable = [
        'nombre',
        'celular',
        'correo',
        'cantidad de personas',
        'fechaReservacion'
    ];
}
