<?php

namespace App\Http\Controllers;

use App\Models\Bolsa;
use App\Models\Categoria;
use App\Models\Gasto;
use Illuminate\Http\Request;

class GastoController extends Controller
{

    private $page_title = "Gastos";
    private $page_description = "Todos los gastos";
    private $logo = "images/logo.png";
    private $logoText = "images/logo-text.png";
    //
    public function index(){

        $page_title = $this->page_title;
        $page_description = $this->page_description;
        $logo = $this->logo;
        $logoText = $this->logoText;
        //$action = __FUNCTION__;
        $action = 'dashboard_1'; 

        $gastos = Gasto::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get();
        return view('paytrack.gastos.index', compact('gastos', 'page_title', 'page_description','action','logo','logoText'));
    }

    public function create(){
        $categorias = Categoria::all();
        $bolsas = Bolsa::all();

        $page_title = $this->page_title;
        $page_description = $this->page_description;
        $logo = $this->logo;
        $logoText = $this->logoText;
        //$action = __FUNCTION__;
        $action = 'dashboard_1'; 

        return view('paytrack.gastos.create', compact('categorias', 'bolsas', 'page_title', 'page_description','action','logo','logoText'));
    }

    public function save( Request $request ){

        if( $request->tipo == 1 ){
            $saldo = Bolsa::where('id', $request->bolsa_id)->first();
            $nuevoSaldo = $saldo->saldo - $request->monto;
            $saldo->saldo = $nuevoSaldo;
            $saldo->save();
        } else {
            $saldo = Bolsa::where('id', $request->bolsa_id)->first();
            $nuevoSaldo = $saldo->saldo + $request->monto;
            $saldo->saldo = $nuevoSaldo;
            $saldo->save();
        }

        $gasto = Gasto::create( $request->all() );
        return redirect('gastos');
    }
}
