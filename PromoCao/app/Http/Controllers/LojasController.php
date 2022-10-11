<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loja;
use App\Http\Requests\LojaRequest;

class LojasController extends Controller
{
    public function index()
    {
        $lojas = Loja::all();
        return view('lojas.index', ['lojas' => $lojas]);
    }

    public function create()
    {
        return view('lojas.create');
    }

    public function store(LojaRequest $request)
    {
        $nova_loja = $request->all();
        Loja::create($nova_loja);

        return redirect()->route('lojas');
    }

    public function destroy($loja_id)
    {
        Loja::where("loja_id", $loja_id)->delete();
        return redirect()->route('lojas');
    }

    public function edit($loja_id)
    {
        $loja = Loja::where("loja_id", $loja_id)->first();
        return view ('lojas.edit', compact('loja'));
    }
    
    public function update(LojaRequest $request, $loja_id)
    {
        Loja::where("loja_id", $loja_id)->first()->update($request->all());
        return redirect()->route('lojas');
    }
}
