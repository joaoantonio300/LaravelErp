@extends('layouts.app')

@section('title', 'Editar Permissão')
@section('content')
    <div class="container">
        <div class="card shadow-sm p-4">
            <h1 class="mb-4">Editar Permissão</h1>

            <form method="POST" action="{{ route('roles.update', $role) }}">
                @csrf
                @method('PUT')
                @include('roles.form')

                <button type="submit" class="btn btn-primary">Atualizar</button>
                <a href="{{ route('roles.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
@endsection
