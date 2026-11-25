<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Banda;

class BandaSeeder extends Seeder
{
    public function run(): void
    {
        Banda::create([
            'nombre' => 'Twenty One Pilots',
            'descripcion' => 'Duo musical crack de Ohio',
            'genero' => 'Alternativo',
            'origen' => 'Ohio'
        ]);

        Banda::create([
            'nombre' => 'Metallica',
            'descripcion' => 'Banda estadounidense de heavy metal.',
            'genero' => 'Heavy Metal',
            'origen' => 'Estados Unidos'
        ]);

        Banda::create([
            'nombre' => 'Queen',
            'descripcion' => 'Banda británica de rock.',
            'genero' => 'Rock',
            'origen' => 'Reino Unido'
        ]);

        Banda::create([
            'nombre' => 'Soda Stereo',
            'descripcion' => 'Banda argentina de rock en español.',
            'genero' => 'Rock alternativo',
            'origen' => 'Argentina'
        ]);
    }
}