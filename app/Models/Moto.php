<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Moto extends Model
{
    use HasFactory;

    protected $fillable = ['modelo', 'anio', 'descripcion', 'precio', 'imagen', 'motor', 'velocidad', 'manual', 'pasajeros'];
}
