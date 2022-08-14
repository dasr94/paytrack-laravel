<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    //
    public function ver(){
        $categories = Categoria::all();

        $page_title = 'Categorias';
        $page_description = 'Todas las categorias';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
        //$action = __FUNCTION__;
        $action = 'dashboard_1';
		
        //return view('dashboard.index', compact('page_title', 'page_description','action','logo','logoText'));
        return view('paytrack.categorias.index', compact('page_title', 'page_description','action','logo','logoText', 'categories'));

    }

    public function create( Request $request ){
        $categoria = Categoria::create( $request->all() );
        //$categoria = new Categoria();
        //$categoria->nombre = $request->nombre

        return redirect('categorias');
    }
}
