@extends('layouts.app')

@section('title', 'Movimentações')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="mb-0">Movimentações</h1>
        <a href="{{ route('movimentacaos.create') }}" class="btn btn-success">
            <i class="bi bi-plus-lg"></i> Nova Movimentação
        </a>
    </div>

    <form method="GET" action="{{ route('movimentacaos.index') }}" class="row g-2 mb-4 align-items-end">
        <div class="col-auto">
            <label for="tipo" class="form-label">Tipo</label>
            <select name="tipo" id="tipo" class="form-select">
                <option value="">Todos os tipos</option>
                <option value="entrada" {{ request('tipo') == 'entrada' ? 'selected' : '' }}>Entrada</option>
                <option value="saida" {{ request('tipo') == 'saida' ? 'selected' : '' }}>Saída</option>
            </select>
        </div>

        <div class="col-auto">
            <label for="produto_id" class="form-label">Produto</label>
            <select name="produto_id" id="produto_id" class="form-select">
                <option value="">Todos os produtos</option>
                @foreach(App\Models\Produto::all() as $produto)
                <option value="{{ $produto->id }}" {{ request('produto_id') == $produto->id ? 'selected' : '' }}>
                    {{ $produto->nome }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Filtrar</button>
            <a href="{{ route('movimentacaos.index') }}" class="btn btn-secondary">Limpar</a>
        </div>
    </form>
    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle text-center">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Tipo</th>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Valor Unitário</th>
                    <th>Observação</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($movimentacaos as $mov)
                <tr>
                    <td>{{ $mov->id }}</td>
                    <td>{{ ucfirst($mov->tipo) }}</td>
                    <td>{{ $mov->produto->nome ?? '—' }}</td>
                    <td>{{ $mov->quantidade }}</td>
                    <td>R$ {{ number_format($mov->valor_unitario, 2, ',', '.') }}</td>
                    <td>{{ $mov->observacao }}</td>
                    <td class="d-flex justify-content-center gap-2">
                        <a href="{{ route('movimentacaos.edit', $mov->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('movimentacaos.destroy', $mov->id) }}" method="POST"
                            onsubmit="return confirm('Deseja excluir?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7">Nenhuma movimentação encontrada.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-3">
        {{ $movimentacaos->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection