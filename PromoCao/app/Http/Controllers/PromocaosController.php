<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promocao;
use App\Http\Requests\PromocaoRequest;

class PromocaosController extends Controller
{
    public function index()
    {
        $promocoes = Promocao::orderBy('promocao_titulo')->paginate(5);
        return view('promocoes.index', ['promocoes' => $promocoes]);
    }

    public function create()
    {
        return view('promocoes.create');
    }

    public function store(PromocaoRequest $request)
    {
        $nova_promocao = $request->all();
        Promocao::create($nova_promocao);

        return redirect()->route('promocoes');
    }

    public function destroy($promocao_id)
    {
        Promocao::where("promocao_id", $promocao_id)->delete();
        return redirect()->route('promocoes');
    }

    public function edit($promocao_id)
    {
        $promocao = Promocao::where("promocao_id", $promocao_id)->first();
        return view ('promocoes.edit', compact('promocao'));
    }
    
    public function update(PromocaoRequest $request, $promocao_id)
    {
        Promocao::where("promocao_id", $promocao_id)->first()->update($request->all());
        return redirect()->route('promocoes');
    }
}
