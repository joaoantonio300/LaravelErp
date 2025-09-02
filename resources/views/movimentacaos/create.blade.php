@extends('layouts.app')

@section('title', 'Nova Movimentação')

@section('content')

    <h1 class="mb-0">Criar Movimentação</h1>
    <br>
    <form action="{{ route('movimentacaos.store') }}" method="POST" class="card p-4 shadow-sm">
        @csrf
        @include('movimentacaos.form')
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('movimentacaos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
