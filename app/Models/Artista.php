<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'acerca_de', 'rol', 'edad', 'nacionalidad', 'banda_id'];

    public function banda()
    {
        return $this->belongsTo(Banda::class);
    }
}