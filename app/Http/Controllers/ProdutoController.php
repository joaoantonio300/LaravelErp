<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function index(Request $request)
    {
        $query = Produto::query();

        if  ($request->filled('nome')) {
            $query->where('nome', $request->nome);
        }

        $produtos = $query->latest()->paginate(10);
        return view('produtos.index', compact('produtos'));
    }

 
    public function create()
    {
        return view('produtos.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            // 'preco' => 'nullable|numeric|min:0',
            'descricao' => 'nullable|string|max:1000',
        ]);

        Produto::create($request->all());

        return redirect()->route('produtos.index')
                         ->with('success', 'Produto criado com sucesso!');
    }

   
    public function show(string $id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.show', compact('produto'));
    }

    
    public function edit(string $id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.edit', compact('produto'));
    }

    
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string|max:1000',
        ]);

        $produto = Produto::findOrFail($id);
        $produto->update($request->all());

        return redirect()->route('produtos.index')
                         ->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy(string $id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return redirect()->route('produtos.index')
                         ->with('success', 'Produto excluído com sucesso!');
    }
}
