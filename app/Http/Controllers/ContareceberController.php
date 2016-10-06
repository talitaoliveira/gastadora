<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContareceberController extends Controller{
    
	public function index(){

    	$nome_controller = "Conta Receber";

		return view('contasreceber/listagem')->with('controller',$nome_controller);
	}

}
