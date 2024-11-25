<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Documento;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $records = Documento::all();
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
            Documento::create($request->all());
            return response()->json([
                'status' => true,
                'message' => "Documento creado correctamente"
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
            $record = Documento::find($id);
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
    public function update(string $id, Request $request)
    {
        try {
            Documento::find($id)->update($request->all());
            return response()->json([
                'status' => true,
                'message' => "Documento actualizado correctamente",
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
            $record = Documento::find($id);
            $record->delete();
            return response()->json([
                'status' => true,
                'message' => "Documento eliminado correctamente",
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => "Hubo un error al eliminar el documento: " . $e->getMessage(),
            ], 400);
        }
    }

    public function addMultipleDocuments(Request $request)
    {

        $allInserted = true;

        try {
            $path = public_path('storage/' . $request->categoria_id);
            if (!file_exists($path)) {
                mkdir($path, 0755, true); // Crea la carpeta si no existe
            }

            foreach ($request->file('files') as $file) {
                $nombreDocumento = $file->getClientOriginalName();

                $file->move($path, $nombreDocumento);

                // $file->storeAs('public/' . $request->categoria_id, $nombreDocumento);

                // $documento->storeAs('public/ilc_adjunto/' . $request->fuente_id . '/uri_adjunto', $nombreDocumento);
                // $documento->storeAs('public/ilc_adjunto/' . $request->fuente_id . '/uri_adjunto', $nombreDocumento);
                Documento::create([
                    'categoria_id' => $request->categoria_id,
                    'nombre' => $nombreDocumento,
                    'url' => url('/') . '/storage/' .  $request->categoria_id . '/' . $nombreDocumento
                ]);
            }
        } catch (\Exception $e) {
            $allInserted = false;
        }

        if ($allInserted) {
            // All inserts were successful
            return response()->json([
                'status' => true,
                'message' => "Documentos almacenados correctamente",
            ], 200);
        } else {
            // Some inserts failed
            return response()->json([
                'status' => false,
                'message' => "Hubo un error al almacenados los documentos: " . $e->getMessage(),
            ], 400);
        }
    }
}
