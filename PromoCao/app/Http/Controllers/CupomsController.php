<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cupom;
use App\Http\Requests\CupomRequest;

class CupomsController extends Controller
{
    public function index(Request $filtro)
    {
        $filtragem = $filtro->get('desc_filtro');
        if ($filtragem == null) {
            $cupons = Cupom::orderBy('cupom_titulo')->paginate(10);
        } else {
            $cupons = Cupom::where('cupom_titulo', 'like', '%' . $filtragem . '%')->orderBy('cupom_titulo')->paginate(10)->setpath('cupons?desc_filtro=' . $filtragem);
        }
        // $cupons = Cupom::orderBy('cupom_titulo')->paginate(5);
        return view('cupons.index', ['cupons' => $cupons]);
    }

    public function create()
    {
        return view('cupons.create');
    }

    public function store(CupomRequest $request)
    {
        $novo_cupom = $request->all();
        Cupom::create($novo_cupom);

        return redirect()->route('cupons');
    }

    public function destroy($cupom_id)
    {
        try {
            Cupom::where("cupom_id", $cupom_id)->delete();
            $ret = array('status' => 200, 'msg' => 'null');
        } catch (\Illuminate\Database\QueryException $e) {
            $ret = array('status' => 500, 'msg' => $e->getMessage());
        } catch (\PDOException $e) {
            $ret = array('status' => 500, 'msg' => $e->getMessage());
        }
        return $ret;
        // Cupom::where("cupom_id", $cupom_id)->delete();
        // return redirect()->route('cupons');
    }

    public function edit($cupom_id)
    {
        $cupom = Cupom::where("cupom_id", $cupom_id)->first();
        return view ('cupons.edit', compact('cupom'));
    }

    public function update(CupomRequest $request, $cupom_id)
    {
        $cpm = Cupom::where("cupom_id", $cupom_id)->first()->update($request->all());
        return redirect()->route('cupons');
    }
}
