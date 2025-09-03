@extends('layouts.app')

@section('title', 'Criar Permissão')
@section('content')

    <div class="container">
        <div class="card shadow-sm p-4">
            <h1 class="mb-4">{{ isset($role) ? 'Editar Permissão' : 'Criar Permissão' }}</h1>

            <form method="POST" action="{{ isset($role) ? route('roles.update', $role) : route('roles.store') }}">
                @csrf
                @if(isset($role))
                    @method('PUT')
                @endif

                <div class="mb-3">
                    <label for="name" class="form-label">Nome do Perfil:</label>
                    <input type="text" id="name" name="name" class="form-control"
                           value="{{ old('name', $role->name ?? '') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Permissões:</label>
                    <div class="row">
                        @foreach($permissions as $permission)
                            <div class="col-md-3 col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"
                                           name="permissions[]"
                                           value="{{ $permission->name }}"
                                           id="perm_{{ $permission->id }}"
                                        {{ isset($role) && $role->hasPermissionTo($permission->name) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="perm_{{ $permission->id }}">
                                        {{ $permission->name }}
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">{{ isset($role) ? 'Atualizar' : 'Salvar' }}</button>
                <a href="{{ route('roles.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>

@endsection
