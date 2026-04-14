<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        return view('contato');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'assunto' => 'required|string|max:255',
            'mensagem' => 'required|string',
        ]);

        // Aqui você pode salvar no BD ou enviar email
        // Mail::to('contato@eteczl.edu.br')->send(new ContactMail($request->all()));

        return redirect()->route('contato')->with('success', 'Mensagem enviada com sucesso!');
    }
}

