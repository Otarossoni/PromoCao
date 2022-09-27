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
}
