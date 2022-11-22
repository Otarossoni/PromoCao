<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Denuncia;
use App\Http\Requests\DenunciaRequest;

class DenunciasController extends Controller
{
    public function index(Request $filtro)
    {
        $filtragem = $filtro->get('desc_filtro');
        if ($filtragem == null) {
            $denuncias = Denuncia::orderBy('denuncia_titulo')->paginate(10);
        } else {
            $denuncias = Denuncia::where('denuncia_titulo', 'like', '%' . $filtragem . '%')->orderBy('denuncia_titulo')->paginate(10)->setpath('denuncias?desc_filtro=' . $filtragem);
        }
        // $denuncias = Denuncia::orderBy('denuncia_titulo')->paginate(5);
        return view('denuncias.index', ['denuncias' => $denuncias]);
    }

    public function create()
    {
        return view('denuncias.create');
    }

    public function store(DenunciaRequest $request)
    {
        $nova_denuncia = $request->all();
        Denuncia::create($nova_denuncia);

        return redirect()->route('denuncias');
    }

    public function destroy($denuncia_id)
    {
        try {
            Denuncia::where("denuncia_id", $denuncia_id)->delete();
            $ret = array('status' => 200, 'msg' => 'null');
        } catch (\Illuminate\Database\QueryException $e) {
            $ret = array('status' => 500, 'msg' => $e->getMessage());
        } catch (\PDOException $e) {
            $ret = array('status' => 500, 'msg' => $e->getMessage());
        }
        return $ret;
        // Denuncia::where("denuncia_id", $denuncia_id)->delete();
        // return redirect()->route('denuncias');
    }

    public function edit($denuncia_id)
    {
        $denuncia = Denuncia::where("denuncia_id", $denuncia_id)->first();
        return view ('denuncias.edit', compact('denuncia'));
    }
    
    public function update(DenunciaRequest $request, $denuncia_id)
    {
        Denuncia::where("denuncia_id", $denuncia_id)->first()->update($request->all());
        return redirect()->route('denuncias');
    }
}
