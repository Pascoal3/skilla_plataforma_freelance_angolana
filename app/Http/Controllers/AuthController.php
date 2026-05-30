<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfil;
use App\Models\Provincia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function registar(Request $request)
    {
        try {
            Log::info('Tentativa de registro:', $request->all());

            $validated = $request->validate([
                'primeiro_nome' => 'required|string|max:255',
                'sobrenome'     => 'required|string|max:255',
                'email'         => 'required|email|unique:perfis,email',
                'password'      => 'required|string|min:8',
                'provincia_id'  => 'required|string',
                'funcao'        => 'required|in:cliente,freelancer',
            ]);

            // Buscar província pelo slug
            $nomeProvinciaSlug = $validated['provincia_id'];
            $nomeProvincia = str_replace('-', ' ', $nomeProvinciaSlug);

            $provincia = Provincia::whereRaw('LOWER(nome) LIKE ?', ['%' . strtolower($nomeProvincia) . '%'])->first();

            if (!$provincia) {
                return response()->json([
                    'errors' => ['provincia_id' => ['Província não encontrada']]
                ], 422);
            }

            $user = Perfil::create([
                'primeiro_nome' => $validated['primeiro_nome'],
                'sobrenome'     => $validated['sobrenome'],
                'email'         => $validated['email'],
                'password'      => Hash::make($validated['password']),
                'provincia_id'  => $provincia->id,
                'funcao'        => $validated['funcao'],
            ]);

            Auth::login($user);

            return response()->json([
                'message' => 'Conta criada com sucesso!',
                'role'    => $user->funcao,
            ], 201);

        } catch (\Exception $e) {
            Log::error('Erro no registro: ' . $e->getMessage());
            
            return response()->json([
                'message' => 'Erro interno: ' . $e->getMessage(),
            ], 500);
        }
    }
}