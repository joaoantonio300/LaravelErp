@extends('layouts.app')

@section('title', 'Estoque')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="mb-0">Estoque</h1>
    </div>

    <form method="GET" action="{{ route('estoque.index') }}" class="row g-2 mb-4 align-items-end">
        <div class="col-auto">
            <label for="produto" class="form-label">Produto</label>
            <input type="text" name="produto" id="produto" class="form-control" value="{{ request('produto') }}">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Filtrar</button>
            <a href="{{ route('estoque.index') }}" class="btn btn-secondary">Limpar</a>
        </div>
    </form>

    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle text-center">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Produto</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                @forelse($produtos as $produto)
                    <tr>
                        <td>{{ $produto->id }}</td>
                        <td>{{ $produto->nome }}</td>
                        <td class="{{ $produto->saldo < 0 ? 'text-danger' : '' }}">
                            {{ $produto->saldo }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Nenhum produto encontrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
