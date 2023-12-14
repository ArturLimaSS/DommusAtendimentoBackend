<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6', // Altere para a regra desejada
        ]);

        $user = new User();
        $user->email = $validatedData['email'];
        $user->name = $validatedData['name'];
        $user->password = Hash::make($validatedData['password']); // Hash da senha
        $user->phone = $request->input('phone');
        $user->user_type = $request->input('user_type', 1); // Valor padrão para user_type, caso não seja fornecido

        $user->save();

        return response()->json(['user' => $user], 201);
    }

    public function show($id)
    {
        $user = User::find($id);

        if ($user) {
            return response()->json(['user' => $user], 200);
        }

        // Se o usuário não for encontrado, é bom retornar uma resposta adequada, como um erro 404 (não encontrado).
        return response()->json(['message' => 'Usuário não encontrado'], 404);
    }
}
