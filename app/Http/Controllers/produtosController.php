<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;
use Illuminate\Support\Facades\Redirect;

class produtosController extends Controller
{
    public function FormularioAnunciar(){
        
        return view('anunciar');
    }

    public function AnunciarBanco(Request $request){
        $dadosAnunciar = $request->validate([
            'nome' => 'string|required',
            'valor' => 'string|required',
            'estado' => 'string|required',
            'cidade' => 'string|required',
            'envio' =>'string|required'
        ]);

        Produtos::create($dadosAnunciar);

        return Redirect::route('register');
    }

    public function MostrarProdutos(){
        $produtos = Produtos::all();
        return view('produtos', ['produtos'=>$produtos]);
    }
}
