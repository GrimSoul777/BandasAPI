<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banda;

class BandaController extends Controller
{
    public function readAll()
    {
        $bandas = Banda::all();
        return response()->json($bandas);
    }

    public function readOne($id)
    {
        $banda = Banda::find($id);
        if (!$banda) return response()->json(['message' => 'Not found'], 404);
        return response()->json($banda);
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:255',
            'genero' => 'required|string|max:255',
            'origen' => 'nullable|string|max:255'
        ]);

        $banda = Banda::create($data);
        return response()->json($banda, 201);
    }

    public function update(Request $request, $id)
    {
        $banda = Banda::find($id);
        if (!$banda) return response()->json(['message' => 'Not found'], 404);

        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:255',
            'genero' => 'required|string|max:255',
            'origen' => 'nullable|string|max:255'
        ]);

        $banda->update($data);
        return response()->json($banda);
    }

    public function delete($id)
    {
        $banda = Banda::find($id);
        if (!$banda) return response()->json(['message' => 'Not found'], 404);
        $banda->delete();
        return response()->json(['message' => 'Soft deleted']);
    }
}