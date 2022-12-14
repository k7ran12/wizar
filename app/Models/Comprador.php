<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprador extends Model
{
    use HasFactory;
    protected $fillable = [
        'run',
        'nombre',
        'region',
        'comuna',
        'ciudad',
        'direccion',
        'email',
        'celular'
    ];
}
