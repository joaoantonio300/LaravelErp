@extends('layouts.app')

@section('title', 'Novo Produto')

@section('content')
<<<<<<< HEAD
<h1 class="mb-0">Criar Produto</h1>
<br>
<form action="{{ route('produtos.store') }}" method="POST" class="card p-4 shadow-sm">
    @csrf
    @include('produtos.form')
    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
=======
    <h1 class="mb-0">Criar Produto</h1>
    <br>
    <form action="{{ route('produtos.store') }}" method="POST" class="card p-4 shadow-sm">
        @csrf
        @include('produtos.form')
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
>>>>>>> 42421110a5a917b0596aceb240f9d2f6c46997f7
