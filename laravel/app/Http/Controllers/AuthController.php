<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Perfil;
use App\Models\Carteira;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth; // Assumindo uso de Tymon JWT

class AuthController extends Controller
{
    public function registar(RegisterRequest $request)
    {
        try {
            $perfil = DB::transaction(function () use ($request) {
                // 1. Gerar Username Único (ex: edsonmanuel1234)
                $baseUsername = strtolower($request->primeiro_nome . $request->sobrenome);
                $username = $baseUsername . rand(1000, 9999);
                
                while (Perfil::where('username', $username)->exists()) {
                    $username = $baseUsername . rand(1000, 9999);
                }

                // 2. Criar Perfil
                $perfil = Perfil::create([
                    'primeiro_nome' => $request->primeiro_nome,
                    'sobrenome' => $request->sobrenome,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'username' => $username,
                    'provincia_id' => $request->provincia_id,
                    'funcao' => $request->funcao,
                    'email_verified_at' => now(),
                ]);

                // 3. Criar Carteira com saldo inicial
                Carteira::create([
                    'perfil_id' => $perfil->id,
                    'saldo' => 10.00,
                ]);

                return $perfil;
            });

            // 4. Gerar Token JWT
            $token = JWTAuth::fromUser($perfil);

            // 5. Resposta JSON com Cookie HttpOnly
            $response = response()->json([
                'status' => 201,
                'message' => 'Conta criada com sucesso!',
                'role' => $perfil->funcao,
            ], 201);

            $response->withCookie(cookie(
                'jwt_token', 
                $token, 
                60, // minutos
                '/', 
                null, 
                true, // Secure (HTTPS)
                true, // HttpOnly
                false, 
                'Strict' // SameSite
            ));

            return $response;

        } catch (\Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => 'Erro ao criar conta.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}