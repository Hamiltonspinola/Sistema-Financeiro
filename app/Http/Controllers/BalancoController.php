<?php

namespace App\Http\Controllers;

use App\Models\Balanco;
use App\Models\Historico;
use App\Models\User;
use Illuminate\Http\Request;

class BalancoController extends Controller
{
    public function index(){
        $saldo = auth()->user()->saldo;
        $montante = $saldo ? $saldo->montante : 0;
        return view('auth.balanço.index', compact('montante'));
    }
    public function deposito(){

        return view('auth.balanço.deposito');
    }
    public function deposito_store(Request $request){
        
        //$valor->balanco($request->value);
        $valor = auth()->user()->saldo()->firstOrCreate([]);
        $valor->balanco($request->value);
        return redirect()->route('saldo');
    }
    public function historic(){

        $historico = User::find(3)->historico;
        return view('auth.balanço.historico', compact('historico'));
//---------Método Correto -------------------------------
        // $historico = auth()->user()->historico()->firstOrCreate([]);
        // return view('auth.balanço.historico', compact('historico'));
//-----------------------------------------------------------------------
    //     $historico = Historico::find($id);

    //     if(!$historico){
    //         return redirect()->route('historico');
    //     }
    //     return view('layouts.admin', compact('historico'));
    // }
// --------------------------------------------------------------------
        // $historico = Historico::get();
        // return view('auth.balanço.historico', compact('historico')); 

        //  $historico = Historico::create($request->all());
        //  return redirect()->route('historico')->where('id', $request->id)->first();

        //  if(!$historico){
        //      return redirect()->route('saldo');
        //  }
        //  return view('auth.balanço.historico', compact('historico'));
    }
}