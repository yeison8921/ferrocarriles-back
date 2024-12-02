<?php

use App\Http\Controllers\Api\AreaController;
use App\Http\Controllers\Api\CategoriaController;
use App\Http\Controllers\Api\DirectorioController;
use App\Http\Controllers\Api\DocumentoController;
use App\Http\Controllers\Api\FuncionarioController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\PaginaController;
use App\Http\Controllers\Api\RolController;
use App\Http\Controllers\Api\SeccionController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

Route::post('auth/login', [LoginController::class, 'login']);
Route::post('register', [LoginController::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('users/checkCurrentPassword', [UserController::class, 'checkCurrentPassword']);
    Route::post('users/updatePassword', [UserController::class, 'updatePassword']);

    Route::get('auth/logout', [LoginController::class, 'logout']);
    Route::get('users/getUserByToken', [UserController::class, 'getUserByToken']);
    Route::apiResource('users', UserController::class);
    Route::apiResource('areas', AreaController::class);
    Route::apiResource('secciones', SeccionController::class);
    Route::apiResource('categorias', CategoriaController::class);
    Route::post('categorias/addMultipleCategories', [CategoriaController::class, 'addMultipleCategories']);
    Route::get('/documentos/download/{categoryId}/{filename}', function ($categoryId, $filename) {
        $path = storage_path('app/private/' . $categoryId . '/' . $filename);
        return Response::download($path, $filename);
    });
    Route::apiResource('documentos', DocumentoController::class);
    Route::post('documentos/addMultipleDocuments', [DocumentoController::class, 'addMultipleDocuments']);
    Route::apiResource('paginas', PaginaController::class);
    Route::post('paginas/select', [PaginaController::class, 'select']);
    Route::apiResource('funcionarios', FuncionarioController::class);
    Route::apiResource('directorios', DirectorioController::class);
    Route::apiResource('roles', RolController::class);
    Route::post('roles/select', [RolController::class, 'select']);
});
