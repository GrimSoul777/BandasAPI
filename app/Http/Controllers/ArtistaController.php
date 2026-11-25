<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artista;

class ArtistaController extends Controller
{
    public function readAll()
    {
        $artistas = Artista::with('banda')->get();
        return response()->json($artistas);
    }

    public function readOne($id)
    {
        $artista = Artista::with('banda')->find($id);
        if (!$artista) return response()->json(['message' => 'Not found'], 404);
        return response()->json($artista);
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'acerca_de' => 'nullable|string',
            'rol' => 'required|string|max:255',
            'edad' => 'nullable|integer',
            'nacionalidad' => 'nullable|string',
            'banda_id' => 'required|exists:bandas,id'
        ]);

        $artista = Artista::create($data);
        return response()->json($artista->load('banda'), 201);
    }

    public function update(Request $request, $id)
    {
        $artista = Artista::find($id);
        if (!$artista) return response()->json(['message' => 'Not found'], 404);

        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'acerca_de' => 'nullable|string',
            'rol' => 'required|string|max:255',
            'edad' => 'nullable|integer',
            'nacionalidad' => 'nullable|string',
            'banda_id' => 'required|exists:bandas,id'
        ]);

        $artista->update($data);
        return response()->json($artista->load('banda'));
    }

    public function delete($id)
    {
        $artista = Artista::find($id);
        if (!$artista) return response()->json(['message' => 'Not found'], 404);
        $artista->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
