<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;


class EstoqueController extends Controller
{
    public function index(Request $request)
    {
        $produtos = Produto::with(['movimentacoes'])->get();

        $produtos->transform(function ($produto) {
            $entradas = $produto->movimentacoes->where('tipo', 'entrada')->sum('quantidade');
            $saidas = $produto->movimentacoes->where('tipo', 'saida')->sum('quantidade');
            $produto->saldo = $entradas - $saidas;
            return $produto;
        });

        return view('estoque.index', compact('produtos'));
    }
}