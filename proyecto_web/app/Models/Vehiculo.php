<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo',
        'placa',
        'usuario_id',
    ];
    //belongsTo: un vehiculo pertenece a un usuario
    //hasMany: un vehiculo puede tener muchas reservas
    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }

    public function entradas()
    {
        return $this->hasMany(Entrada::class);
    }
}
