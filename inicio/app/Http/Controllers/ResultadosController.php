<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use DB;
use Log;

class ResultadosController extends Controller
{
    public function searchcategorias(){

    $cate = \Input::get('categorias');

    //$separation = implode("  |  ", $cate);
    //echo $separation;

    $ce = DB::table('categorias_ejemplo') -> whereIn('id_categorias', $cate)->get();
    //print_r($ce);

    //$separation = implode("  |  ", $ce);
    //echo $separation;

    //return \View::make('resultadosbusqueda')->with('#results',$ce);
    //return $ce;
    //return view('resultadosbusqueda', ['ce',$ce]);

    return view('ejemplo')->with('ce',$ce);
  
	}
}
