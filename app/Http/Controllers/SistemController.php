<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\UsuariosModel;
use App\EstadosModel;
use App\MunicipiosModel;

class SistemController extends Controller
{
    public function entrada(){
        return view('entrada');
    }

    public function combos(){
        $estados = EstadosModel::all();
        return view('combos')
            ->with(['estados'=>$estados]);
    }

    public function datos(Request $request){
        dd($request->all());

        // return redirect()->route('combos');
        $estados = EstadosModel::all();
        return view('combos')
            ->with(['estados'=>$estados]);
    }
}
