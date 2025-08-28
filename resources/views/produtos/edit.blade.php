@extends('layouts.app')

@section('title', 'Editar Produto')

@section('content')
<h1 class="mb-0">Editar Produto</h1>
<br>
<form action="{{ route('produtos.update', $produto->id) }}" method="POST" class="card p-4 shadow-sm">
    @csrf
    @method('PUT')
    @include('produtos.form')
    <button type="submit" class="btn btn-primary">Atualizar</button>
    <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
