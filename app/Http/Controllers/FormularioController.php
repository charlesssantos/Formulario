<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulario;

class FormularioController extends Controller
{
    public function store(Request $request)
    {
        $formulario = new Formulario;
        $formulario->cpf = $request->cpf;
        $formulario->nome = $request->nome;
        $formulario->sobrenome = $request->sobrenome;
        $formulario->data_nascimento = $request->data_nascimento;
        $formulario->email = $request->email;
        $formulario->genero = $request->genero;
        $formulario->save();

        return response()->json(['message' => 'Formulário recebido com sucesso!']);
    }
}
