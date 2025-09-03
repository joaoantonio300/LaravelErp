@extends('layouts.app')

@section('title', 'Editar Movimentação')

@section('content')
<h1 class="mb-0">Editar Movimentações</h1>
<br>
<form action="{{ route('movimentacaos.update', $movimentacao->id) }}" method="POST" class="card p-4 shadow-sm">
    @csrf
    @method('PUT')
    @include('movimentacaos.form')
    <button type="submit" class="btn btn-primary">Atualizar</button>
    <a href="{{ route('movimentacaos.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
