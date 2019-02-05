<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function lista(){

    	$html = '<h1> Listagem de Produtos </h1>';
    	$produtos = DB::select('select * from produtos');

    	foreach ($produtos as $p) {
    		$html .= "<br> Nome: " . $p->nome;
    	}

    	return $html;

    }
}
