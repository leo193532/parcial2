<?php
namespace App\Http\Controllers;
use App\Models\Marca;
use App\Http\Requests\StoreMarcaRequest;
use App\Http\Requests\UpdateMarcaRequest;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
   
    public function index()
    {
        $marcas = Marca::all();
        return response()->json([
            'success' => true,
            'data' => $marcas
        ]);
    }

   
    public function store(StoreMarcaRequest $request)
    {
        try {
            $marca = Marca::create($request->validated());
            return response()->json([
                'success' => true,
                'message' => 'Marca creada exitosamente.',
                'data' => $marca
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al crear la marca.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    
    public function show(Marca $marca)
    {
        return response()->json([
            'success' => true,
            'data' => $marca
        ]);
    }

    
    public function update(UpdateMarcaRequest $request, Marca $marca)
    {
        try {
         
            $validated = $request->validate([
                'nombre' => 'required|string|max:100|unique:marcas,nombre,' . $marca->id,
            ]);

            $marca->update($validated);
            return response()->json([
                'success' => true,
                'message' => 'Marca actualizada exitosamente.',
                'data' => $marca
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al actualizar la marca.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function destroy(Marca $marca)
    {
        try {
            $marca->delete();
            return response()->json([
                'success' => true,
                'message' => 'Marca eliminada exitosamente.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al eliminar la marca. Verifica que no tenga productos asociados.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}