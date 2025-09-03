@extends('layouts.app')

@section('title', 'Perfis')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="mb-0">
                <i class="bi bi-tags me-2"></i> Perfis
            </h1>
            <a href="{{ route('roles.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle me-1"></i> Novo Perfil
            </a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body p-0">
                <table class="table table-hover table-bordered mb-0">
                    <thead class="table-light">
                    <tr>
                        <th>Nome</th>
                        <th class="text-center" style="width: 150px;">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($roles as $role)
                        <tr>
                            <td>{{ $role->name }}</td>
                            <td class="text-center">
                                <a href="{{ route('roles.edit', $role) }}"
                                   class="btn btn-sm btn-primary me-1">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form action="{{ route('roles.destroy', $role) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('Tem certeza que deseja excluir este perfil?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2" class="text-center text-muted">
                                Nenhum perfil encontrado.
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
