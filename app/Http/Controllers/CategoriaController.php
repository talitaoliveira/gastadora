<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CategoriaController extends Controller{
    
    public function index(){

    	$migalhas = array();
    	$migalhas['nome_controller'] = "Categoria";
		$migalhas['acao_disponivel'] = "Adicionar";

		return view('categorias/listagem')->with('migalhas',$migalhas);
	}

	public function adicionar(Request $request){

		$migalhas['nome_controller'] = "Categoria";
		$migalhas['acao_atual'] = "Adicionar";


		if($request->isMethod('post')){

		}
		return view('categorias/adicionar')->with('migalhas',$migalhas);
	}

}
