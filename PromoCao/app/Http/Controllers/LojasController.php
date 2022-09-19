<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loja;

class LojasController extends Controller
{
    public function index()
    {
        $lojas = Loja::all();
        return view('lojas', ['lojas' => $lojas]);
    }
}
