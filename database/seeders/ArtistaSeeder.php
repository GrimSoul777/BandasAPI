<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artista;
use App\Models\Banda;

class ArtistaSeeder extends Seeder
{
    public function run(): void
    {
        $top = Banda::where('nombre', 'Twenty One Pilots')->first();
        $metallica = Banda::where('nombre', 'Metallica')->first();
        $queen = Banda::where('nombre', 'Queen')->first();
        $sodaStereo = Banda::where('nombre', 'Soda Stereo')->first();

        Artista::create([
            'nombre' => 'Tyler Joseph',
            'acerca_de' => 'Es un pelon cantante, rapero, compositor y productor discográfico estadounidense',
            'rol' => 'Vocalista y bajista',
            'edad' => 37,
            'nacionalidad' => 'Estadounidense',
            'banda_id' => $top->id
        ]);

        Artista::create([
            'nombre' => 'Josh Dun',
            'acerca_de' => 'Baterista super crack y super guapo del duo musical Twenty one pilots',
            'rol' => 'Baterista',
            'edad' => 38,
            'nacionalidad' => 'Estadounidense',
            'banda_id' => $top->id
        ]);

        Artista::create([
            'nombre' => 'James Hetfield',
            'acerca_de' => 'Vocalista y guitarrista.',
            'rol' => 'Vocalista y guitarrista',
            'edad' => 63,
            'nacionalidad' => 'Estadounidense',
            'banda_id' => $metallica->id
        ]);

        Artista::create([
            'nombre' => 'Lars Ulrich',
            'acerca_de' => 'Baterista y cofundador.',
            'rol' => 'Baterista',
            'edad' => 62,
            'nacionalidad' => 'Danés',
            'banda_id' => $metallica->id
        ]);

        Artista::create([
            'nombre' => 'Freddie Mercury',
            'acerca_de' => 'Vocalista de Queen.',
            'rol' => 'Vocalista',
            'edad' => null,
            'nacionalidad' => 'Británico',
            'banda_id' => $queen->id
        ]);

        Artista::create([
            'nombre' => 'Brian May',
            'acerca_de' => 'Guitarrista de Queen.',
            'rol' => 'Guitarrista',
            'edad' => 79,
            'nacionalidad' => 'Británico',
            'banda_id' => $queen->id
        ]);

        Artista::create([
            'nombre' => 'Gustavo Cerati',
            'acerca_de' => 'Vocalista y guitarrista de Soda Stereo.',
            'rol' => 'Vocalista y guitarrista',
            'edad' => null,
            'nacionalidad' => 'Argentino',
            'banda_id' => $sodaStereo->id
        ]);
    }
}