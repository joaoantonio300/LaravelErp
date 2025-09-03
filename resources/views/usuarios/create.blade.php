@extends('layouts.app')

@section('title', 'Novo Usuário')

@section('content')
<<<<<<< HEAD
<h1 class="mb-0">Criar Usuário</h1>
<br>
<form action="{{ route('usuarios.store') }}" method="POST" class="card p-4 shadow-sm">
    @csrf
    @include('usuarios.form')
    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
=======
    <h1 class="mb-0">Criar Usuário</h1>
    <br>
    <form action="{{ route('usuarios.store') }}" method="POST" class="card p-4 shadow-sm">
        @csrf
        @include('usuarios.form')
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
>>>>>>> 42421110a5a917b0596aceb240f9d2f6c46997f7
