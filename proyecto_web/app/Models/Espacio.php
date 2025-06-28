<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Espacio extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo',
        'estadoE',
        'ubicacion',
        'tarifa',
    ];

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }

    public function entradas()
    {
        return $this->hasMany(Entrada::class);
    }
}
