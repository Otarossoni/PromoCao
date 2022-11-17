<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consumidor;
use App\Http\Requests\ConsumidorRequest;

class ConsumidoresController extends Controller
{
    public function index()
    {
        $consumidores = Consumidor::orderBy('consumidor_nome')->paginate(5);
        return view('consumidores.index', ['consumidores' => $consumidores]);
    }

    public function create()
    {
        return view('consumidores.create');
    }

    public function store(ConsumidorRequest $request)
    {
        $novo_consumidor = $request->all();
        Consumidor::create($novo_consumidor);

        return redirect()->route('consumidores');
    }

    public function destroy($consumidor_id)
    {
        Consumidor::where("consumidor_id", $consumidor_id)->delete();
        return redirect()->route('consumidores');
    }

    public function edit($consumidor_id)
    {
        $consumidor = Consumidor::where("consumidor_id", $consumidor_id)->first();
        return view ('consumidores.edit', compact('consumidor'));
    }
    
    public function update(ConsumidorRequest $request, $consumidor_id)
    {
        Consumidor::where("consumidor_id", $consumidor_id)->first()->update($request->all());
        return redirect()->route('consumidores');
    }
}
