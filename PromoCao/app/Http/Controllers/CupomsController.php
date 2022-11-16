<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cupom;
use App\Http\Requests\CupomRequest;

class CupomsController extends Controller
{
    public function index()
    {
        $cupons = Cupom::orderBy('cupom_titulo')->paginate(5);
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
        Cupom::where("cupom_id", $cupom_id)->delete();
        return redirect()->route('cupons');
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
