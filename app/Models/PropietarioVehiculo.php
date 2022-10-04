<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropietarioVehiculo extends Model
{
    use HasFactory;
    protected $fillable = [
        'run',
        'nombre',
        'fecha_adquision',
        'repertorio',
        'de_fecha',
        'comuna',
        'direccion',
        'celular',
        'email',
    ];
}
