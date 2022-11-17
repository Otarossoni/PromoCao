<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;
use App\Http\Requests\ComentarioRequest;

class ComentariosController extends Controller
{
    public function index()
    {
        $comentarios = Comentario::orderBy('comentario_titulo')->paginate(5);
        return view('comentarios.index', ['comentarios' => $comentarios]);
    }

    public function create()
    {
        return view('comentarios.create');
    }

    public function store(ComentarioRequest $request)
    {
        $novo_comentario = $request->all();
        Comentario::create($novo_comentario);

        return redirect()->route('comentarios');
    }

    public function destroy($comentario_id)
    {
        Comentario::where("comentario_id", $comentario_id)->delete();
        return redirect()->route('comentarios');
    }

    public function edit($comentario_id)
    {
        $comentario = Comentario::where("comentario_id", $comentario_id)->first();
        return view ('comentarios.edit', compact('comentario'));
    }
    
    public function update(ComentarioRequest $request, $comentario_id)
    {
        Comentario::where("comentario_id", $comentario_id)->first()->update($request->all());
        return redirect()->route('comentarios');
    }
}
