<?php
    
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loja;
use App\Http\Requests\LojaRequest;

class LojasController extends Controller
{
    public function index(Request $filtro)
    {
        $filtragem = $filtro->get('desc_filtro');
        if ($filtragem == null) {
            $lojas = Loja::orderBy('loja_nomeFantasia')->paginate(10);
        } else {
            $lojas = Loja::where('loja_nomeFantasia', 'like', '%' . $filtragem . '%')->orderBy('loja_nomeFantasia')->paginate(10)->setpath('lojas?desc_filtro=' . $filtragem);
        }

        return view('lojas.index', ['lojas' => $lojas]);
        // $lojas = Loja::orderBy('loja_nomeFantasia')->paginate(5);
        // return view('lojas.index', ['lojas' => $lojas]);
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
        try {
            Loja::where("loja_id", $loja_id)->delete();
            $ret = array('status' => 200, 'msg' => 'null');
        } catch (\Illuminate\Database\QueryException $e) {
            $ret = array('status' => 500, 'msg' => $e->getMessage());
        } catch (\PDOException $e) {
            $ret = array('status' => 500, 'msg' => $e->getMessage());
        }
        return $ret;
        // Loja::where("loja_id", $loja_id)->delete();
        // return redirect()->route('lojas');
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
