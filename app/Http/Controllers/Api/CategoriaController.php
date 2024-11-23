<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $records = Categoria::all();
            return response()->json($records);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => "Hubo un error al obtener los datos: " . $e->getMessage(),
            ], 400);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            return $this->create($request->all());
            // return response()->json([
            //     'status' => true,
            //     'message' => "Año creado correctamente"
            // ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => "Hubo un error al guardar los datos: " . $e->getMessage(),
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $record = Categoria::find($id);
            return $record;
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => "Hubo un error al obtener los datos: " . $e->getMessage(),
            ], 400);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            Categoria::find($id)->update($request->all());
            return response()->json([
                'status' => true,
                'message' => "Categoría actualizada correctamente",
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => "Hubo un error al actualizar los datos: " . $e->getMessage(),
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $record = Categoria::find($id);
            $record->delete();
            return response()->json([
                'status' => true,
                'message' => "Categoría eliminada correctamente",
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => "Hubo un error al eliminar los datos: " . $e->getMessage(),
            ], 400);
        }
    }

    public function addMultipleCategories(Request $request)
    {
        $allInserted = true;
        foreach ($request->elements as $key => $value) {
            try {
                Categoria::create($value);
            } catch (\Exception $e) {
                $allInserted = false;
            }
        }
        if ($allInserted) {
            // All inserts were successful
            return response()->json([
                'status' => true,
                'message' => "Categorías creadas correctamente",
            ], 200);
        } else {
            // Some inserts failed
            return response()->json([
                'status' => false,
                'message' => "Hubo un error al insertar  los datos: " . $e->getMessage(),
            ], 400);
        }
    }
}
