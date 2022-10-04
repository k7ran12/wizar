<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;
    protected $fillable = [
        'inscripcion',
        'tipo_vehiculo',
        'marca',
        'modelo',
        'num_motor',
        'chasis',
        'num_vin',
        'color',
        'combustible',
        'pbv',
        'instituto',
        'num_poliza',
        'fecha_vencimiento_politica',
        'limitaciones_dominio',
        'subincripciones',
    ];
}
