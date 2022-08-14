<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programado;
use App\Http\Controllers\Controller;

class ProgramadoController extends Controller
{
    public function programados(){
        //$programados = Programado::all();
        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
        //$action = __FUNCTION__;
        $action = 'dashboard_1';
		
        //return view('dashboard.index', compact('page_title', 'page_description','action','logo','logoText'));
        return view('paytrack.programado.index', compact('page_title', 'page_description','action','logo','logoText'));
    }
    public function create(Request $request){
        $programado = Programado::create($request->all());
    }
}