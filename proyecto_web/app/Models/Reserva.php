<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'espacio_id',
        'usuario_id',
        'vehiculo_id',
        'fecha_reserva',
        'fecha_entrada',
        'fecha_salida',
        'estado',
    ];

    public function espacio()
    {
        return $this->belongsTo(Espacio::class, 'espacio_id');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }

    public function vehiculo()
    {
        return $this ->belongsTo(Vehiculo::class, 'vehiculo_id');
    }
}
