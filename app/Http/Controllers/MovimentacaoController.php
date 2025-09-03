<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovimentacaoRequest;
use App\Models\Movimentacao;
use Illuminate\Http\Request;
use App\Models\Produto;
use App\Repositories\MovimentacaoRepository;
use App\DTOs\MovimentacaoDTO;

class MovimentacaoController extends Controller
{
    protected MovimentacaoRepository $repository;

    public function __construct(MovimentacaoRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(Request $request)
    {
        $query = Movimentacao::query();

        if ($request->filled('tipo')) {
            $query->where('tipo', $request->tipo);
        }

        if ($request->filled('produto_id')) {
            $query->where('produto_id', $request->produto_id);
        }

        $movimentacaos = $query->latest()->paginate(10)->withQueryString();;

        return view('movimentacaos.index', compact('movimentacaos'));
    }

    public function create()
    {
        $produtos = Produto::all();
        return view('movimentacaos.create', compact('produtos'));
    }

    public function store(StoreMovimentacaoRequest $request)
    {
        $dto = MovimentacaoDTO::fromArray($request->validated());
        $this->repository->create($dto);
        return redirect()->route('movimentacaos.index')
            ->with('success', 'Movimentação criada com sucesso!');
    }

    public function show(string $id)
    {
        $movimentacao = Movimentacao::findOrFail($id);
        return view('movimentacaos.show', compact('movimentacao'));
    }

    public function edit(string $id)
    {
        $movimentacao = Movimentacao::findOrFail($id);
        $produtos = Produto::all();

        return view('movimentacaos.edit', compact('movimentacao', 'produtos'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'tipo' => 'required|in:entrada,saida',
            'produto_id' => 'required|integer',
            'quantidade' => 'required|integer|min:1',
            'valor_unitario' => 'nullable|numeric',
            'observacao' => 'nullable|string',
        ]);

        $movimentacao = Movimentacao::findOrFail($id);
        $movimentacao->update($request->all());

        return redirect()->route('movimentacaos.index')
            ->with('success', 'Movimentação atualizada com sucesso!');
    }

    public function destroy(string $id)
    {
        $movimentacao = Movimentacao::findOrFail($id);
        $movimentacao->delete();

        return redirect()->route('movimentacaos.index')
            ->with('success', 'Movimentação excluída com sucesso!');
    }
}
