<?php

namespace App\Http\Controllers;

use App\Models\Bolsa;
use Illuminate\Http\Request;

class BolsaController extends Controller
{
    //
    public function ver(){
        $bolsas = Bolsa::all();

        $page_title = 'Bolsas';
        $page_description = 'Todas las bolsas';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
        //$action = __FUNCTION__;
        $action = 'dashboard_1';
		
        //return view('dashboard.index', compact('page_title', 'page_description','action','logo','logoText'));
        return view('paytrack.bolsa.index', compact('page_title', 'page_description','action','logo','logoText', 'bolsas'));

    }

    public function save( Request $request ){
        $bolsa = Bolsa::create( $request->all() );
        return redirect('bolsa');
    }


    public function dashboard(){
        $bolsas = Bolsa::all();

        $page_title = 'Bolsas';
        $page_description = 'Todas las bolsas';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
        //$action = __FUNCTION__;
        $action = 'dashboard_1';
		
        //return view('dashboard.index', compact('page_title', 'page_description','action','logo','logoText'));
        return view('paytrack.dashboard', compact('page_title', 'page_description','action','logo','logoText', 'bolsas'));


    }
}
