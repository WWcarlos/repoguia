<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'label',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
