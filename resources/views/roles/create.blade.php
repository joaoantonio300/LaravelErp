@extends('layouts.app')

@section('title', 'Criar Permissão')
@section('content')
    <div class="container">
        <div class="card shadow-sm p-4">
            <h1 class="mb-4">Criar Permissão</h1>

            <form method="POST" action="{{ route('roles.store') }}">
                @csrf
                @include('roles.form')

                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{ route('roles.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
@endsection
