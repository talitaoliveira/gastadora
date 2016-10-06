<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContapagarController extends Controller{
    
	public function index(){

    	$nome_controller = "Conta Pagar";

		return view('contaspagar/listagem')->with('controller',$nome_controller);
	}

}
