@extends('layouts.app')

@section('title', 'Nova Movimentação')

@section('content')

<form action="{{ route('movimentacaos.store') }}" method="POST" class="card p-4 shadow-sm">
        @csrf

        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <select name="tipo" id="tipo" class="form-control" required>
                <option value="entrada">Entrada</option>
                <option value="saida">Saída</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="produto_id" class="form-label">Produto</label>
            <input type="text" name="produto_id" id="produto_id" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="quantidade" class="form-label">Quantidade</label>
            <input type="number" name="quantidade" id="quantidade" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="valor_unitario" class="form-label">Valor Unitário</label>
            <input type="text" name="valor_unitario" id="valor_unitario" class="form-control">
        </div>

        <div class="mb-3">
            <label for="observacao" class="form-label">Observação</label>
            <textarea name="observacao" id="observacao" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('movimentacaos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>

@endsection