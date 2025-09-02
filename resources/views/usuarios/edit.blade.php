@extends('layouts.app')

@section('title', 'Editar Usuário')

@section('content')
    <h1 class="mb-0">Editar Usuário</h1>
    <br>
    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST" class="card p-4 shadow-sm">
        @csrf
        @method('PUT')
        @include('usuarios.form')
        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
