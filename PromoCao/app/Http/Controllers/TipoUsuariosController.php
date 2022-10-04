<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoUsuario;
use App\Http\Requests\TipoUsuarioRequest;

class TipoUsuariosController extends Controller
{
    public function index() {
        $tipos = TipoUsuario::All();
        return view('tiposUsuario.index', ['tipos' => $tipos]);
    }

    public function create()
    {
        return view('tiposUsuario.create');
    }

    public function store(TipoUsuarioRequest $request)
    {
        $novo_tipo = $request->all();
        TipoUsuario::create($novo_tipo);

        return redirect()->route('tipos');
    }
}
