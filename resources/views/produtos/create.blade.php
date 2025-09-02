@extends('layouts.app')

@section('title', 'Novo Produto')

@section('content')
    <h1 class="mb-0">Criar Produto</h1>
    <br>
    <form action="{{ route('produtos.store') }}" method="POST" class="card p-4 shadow-sm">
        @csrf
        @include('produtos.form')
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
