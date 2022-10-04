<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;
    protected $fillable = [
        'fecha_creacion',
        'num_interno',
        'sucuarsal',
        'usuario',
        'num_inscripcion',
        'rut_comprador',
        'nombre_vendedor',
        'propietario_vehiculo_id',
        'vehiculo_id',
        'firma_id',
        'comprador_id',
        'estado',
    ];

    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class);
    }
    public function propietario_vehiculo()
    {
        return $this->belongsTo(PropietarioVehiculo::class);
    }
    public function firma()
    {
        return $this->belongsTo(Firma::class);
    }
    public function comprador()
    {
        return $this->belongsTo(Comprador::class);
    }

}
