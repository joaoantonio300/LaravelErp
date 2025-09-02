@extends('layouts.app')

@section('title', 'Produtos')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="mb-0">Produtos</h1>
            <a href="{{ route('produtos.create') }}" class="btn btn-success">
                <i class="bi bi-plus-lg"></i> Novo Produto
            </a>
        </div>

        <form method="GET" action="{{ route('produtos.index') }}" class="row g-2 mb-4 align-items-end">
            <div class="col-auto">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" value="{{ request('nome') }}">
            </div>

            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Filtrar</button>
                <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Limpar</a>
            </div>
        </form>

        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle text-center">
                <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @forelse($produtos as $produto)
                    <tr>
                        <td>{{ $produto->id }}</td>
                        <td>{{ $produto->nome }}</td>
                        <!-- <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td> -->
                        <td>{{ $produto->descricao ?? '—' }}</td>
                        <td class="d-flex justify-content-center gap-2">
                            <a href="{{ route('produtos.edit', $produto->id) }}"
                               class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST"
                                  onsubmit="return confirm('Deseja excluir?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Nenhum produto encontrado.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-3">
            {{ $produtos->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
