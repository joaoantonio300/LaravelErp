@extends('layouts.app')

@section('title', 'Usuários')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="mb-0">Usuários</h1>
            <a href="{{ route('usuarios.create') }}" class="btn btn-success">
                <i class="bi bi-plus-lg"></i> Novo Usuário
            </a>
        </div>

        <form method="GET" action="{{ route('usuarios.index') }}" class="row g-2 mb-4 align-items-end">
            <div class="col-auto">
                <label for="name" class="form-label">Nome</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ request('name') }}">
            </div>

            <div class="col-auto">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" id="email" class="form-control" value="{{ request('email') }}">
            </div>

            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Filtrar</button>
                <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Limpar</a>
            </div>
        </form>

        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle text-center">
                <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @forelse($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->id }}</td>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td class="d-flex justify-content-center gap-2">
                            <a href="{{ route('usuarios.edit', $usuario->id) }}"
                               class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST"
                                  onsubmit="return confirm('Deseja excluir este usuário?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Nenhum usuário encontrado.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-3">
            {{ $usuarios->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
