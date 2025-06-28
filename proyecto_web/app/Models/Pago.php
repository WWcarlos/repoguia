<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario_id',
        'entrada_id',
        'montoPagar',
        'metodo_pago',
        'estado',
        'fecha_pago'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class,'usuario_id');
    }

    public function entrada()
    {
        return $this->belongsTo(Entrada::class,'entrada_id');
    }
}
