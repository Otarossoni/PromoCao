<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promocao;
use App\Http\Requests\PromocaoRequest;

class PromocaosController extends Controller
{
    public function index(Request $filtro)
    {
        $filtragem = $filtro->get('desc_filtro');
        if ($filtragem == null) {
            $promocoes = Promocao::orderBy('promocao_titulo')->paginate(10);
        } else {
            $promocoes = Promocao::where('promocao_titulo', 'like', '%' . $filtragem . '%')->orderBy('promocao_titulo')->paginate(10)->setpath('promocoes?desc_filtro=' . $filtragem);
        }
        // $promocoes = Promocao::orderBy('promocao_titulo')->paginate(5);
        return view('promocoes.index', ['promocoes' => $promocoes]);
    }

    public function create()
    {
        return view('promocoes.create');
    }

    public function store(PromocaoRequest $request)
    {
        $promocao = Promocao::create([
            'promocao_titulo' => $request->promocao_titulo,
            'promocao_descricao' => $request->promocao_descricao,
            'promocao_preco' => $request->promocao_preco,
            'promocao_url' => $request->promocao_url,
        ]);

        $cupons = $request->cupons;
        foreach($cupons as $c => $value) {
            PromocaoCupom::create([
                promocao_id => $promocao->promocao_id,
                cupom_id => $cupons[$c],
            ]);
        }
        // $nova_promocao = $request->all();
        // Promocao::create($nova_promocao);

        return redirect()->route('promocoes');
    }

    public function destroy($promocao_id)
    {
        try {
            Promocao::where("promocao_id", $promocao_id)->delete();
            $ret = array('status' => 200, 'msg' => 'null');
        } catch (\Illuminate\Database\QueryException $e) {
            $ret = array('status' => 500, 'msg' => $e->getMessage());
        } catch (\PDOException $e) {
            $ret = array('status' => 500, 'msg' => $e->getMessage());
        }
        return $ret;
        // Promocao::where("promocao_id", $promocao_id)->delete();
        // return redirect()->route('promocoes');
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
