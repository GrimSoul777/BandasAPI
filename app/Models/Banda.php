<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Banda extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'nombre', 
        'descripcion', 
        'genero', 
        'origen'
    ];

    public function artistas()
    {
        return $this->hasMany(Artista::class);
    }
}