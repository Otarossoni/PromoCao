<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consumidor;
use App\Http\Requests\ConsumidorRequest;

class ConsumidoresController extends Controller
{
    public function index(Request $filtro)
    {
        $filtragem = $filtro->get('desc_filtro');
        if ($filtragem == null) {
            $consumidores = Consumidor::orderBy('consumidor_nome')->paginate(10);
        } else {
            $consumidores = Consumidor::where('consumidor_nome', 'like', '%' . $filtragem . '%')->orderBy('consumidor_nome')->paginate(10)->setpath('consumidores?desc_filtro=' . $filtragem);
        }
        
        return view('consumidores.index', ['consumidores' => $consumidores]);
        // $consumidores = Consumidor::orderBy('consumidor_nome')->paginate(5);
        // return view('consumidores.index', ['consumidores' => $consumidores]);
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
        try {
            Consumidor::where("consumidor_id", $consumidor_id)->delete();
            $ret = array('status' => 200, 'msg' => 'null');
        } catch (\Illuminate\Database\QueryException $e) {
            $ret = array('status' => 500, 'msg' => $e->getMessage());
        } catch (\PDOException $e) {
            $ret = array('status' => 500, 'msg' => $e->getMessage());
        }
        return $ret;
        // Consumidor::where("consumidor_id", $consumidor_id)->delete();
        // return redirect()->route('consumidores');
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
