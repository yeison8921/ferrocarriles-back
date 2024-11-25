<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        try {
            $validated = Validator::make($request->all(), [
                'name' => 'required|string',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string',
                'rol_id' => 'required|integer',
            ]);

            if ($validated->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'error',
                    'errors' => $validated->errors()
                ], 500);
            }

            $user = User::Create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'rol_id' => $request->rol_id
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Usuario creado correctamente',
                'token' => $user->createToken('API TOKEN')->plainTextToken
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'errors' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Handle an authentication attempt.
     */
    public function login(Request $request)
    {
        try {
            $validated = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required|string',
            ]);

            if ($validated->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'error',
                    'errors' => $validated->errors()
                ], 500);
            }

            if (!Auth::attempt($request->only(['email', 'password']))) {
                return response()->json([
                    'status' => false,
                    'message' => 'Usuario y/o contraseña incorrecta',
                ], 200);
            }
            $user = User::where('email', $request->email)->first();

            return response()->json([
                'status' => true,
                'message' => 'Usuario logueado correctamente',
                'token' => $user->createToken('API TOKEN')->plainTextToken,
                'role_id' => $user->rol_id
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'errors' => $th->getMessage()
            ], 500);
        }
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json([
            'status' => true,
            'message' => 'Sesión cerrada correctamente',
        ], 200);
    }
    public function test()
    {
        return 'test';
    }
}
