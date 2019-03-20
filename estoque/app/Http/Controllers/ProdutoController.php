<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use Validator;
use estoque\Produto;
use estoque\Http\Requests\ProdutoRequest;


class ProdutoController extends Controller
{
    public function lista(){

   	 $produtos = DB::select('select * from produtos');
   	 return view('listagem')->with('produtos', $produtos);

    }

    public function mostra(){
    	$id = Request::route('id');

		$produto = DB::select('select * from produtos where id = ?', [$id]);
    	if(empty($produto)){
    		return "This product does not exist";
    	}
	   	return view('detalhes')->with('p', $produto[0]);

    }

    public function novo(){
    	return view('formulario');
    }

	public function adiciona(ProdutoRequest $request){

		Produto::create($request->all());
		return redirect('/produtos')->withInput();

	}

	public function getJson(){
		$produtos = DB::select('select * from produtos');
		return $produtos;
	}

}
