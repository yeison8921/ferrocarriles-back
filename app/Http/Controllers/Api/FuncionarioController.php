<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $records = Funcionario::all();
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
            $record = Funcionario::find($id);
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
            return $this->update($request, $id);
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
            $record = Funcionario::find($id);
            $record->delete();
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => "Hubo un error al eliminar los datos: " . $e->getMessage(),
            ], 400);
        }
    }
}
