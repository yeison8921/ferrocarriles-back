<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Requests\Api\Seccion\StoreSeccionRequest as SeccionStoreSeccionRequest;
use App\Http\Controllers\Requests\Api\Seccion\UpdateSeccionRequest as SeccionUpdateSeccionRequest;
use App\Models\Seccion;
use Illuminate\Http\Request;

class SeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $records = Seccion::all();
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
    public function store(SeccionStoreSeccionRequest $request)
    {
        try {
            Seccion::create($request->all());
            return response()->json([
                'status' => true,
                'message' => "Sección creada correctamente"
            ], 200);
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
            $record = Seccion::find($id);
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
    public function update(SeccionUpdateSeccionRequest $request, string $id)
    {
        try {
            Seccion::find($id)->update($request->all());
            return response()->json([
                'status' => true,
                'message' => "Sección actualizada correctamente"
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
            $record = Seccion::find($id);
            $record->delete();
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => "Hubo un error al eliminar los datos: " . $e->getMessage(),
            ], 400);
        }
    }
}
