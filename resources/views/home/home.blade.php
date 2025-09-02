@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container my-5">
    <div class="jumbotron bg-primary text-white p-5 rounded-3 mb-5">
        <h1 class="display-4">Bem-vindo ao Sistema!</h1>
        <p class="lead">Aqui você pode gerenciar suas tarefas, visualizar relatórios e muito mais.</p>
        <a class="btn btn-light btn-lg mt-3" href="{{ route('movimentacaos.index')}}" role="button">Começar</a>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Gerenciar Usuários</h5>
                    <p class="card-text">Cadastre, edite e remova usuários com facilidade.</p>
                    <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Ir para usuários</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Relatórios</h5>
                    <p class="card-text">Visualize relatórios detalhados sobre suas operações.</p>
                    <a href="{{ route('relatorios.index') }}" class="btn btn-primary">Ver relatórios</a>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5">
        <h3>Novidades</h3>
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action">
                Sistema atualizado para a versão 2.0 com melhorias de performance.
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                Nova funcionalidade de exportação de relatórios em PDF disponível.
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                Integração com notificações por e-mail adicionada.
            </a>
        </div>
    </div>
</div>
@endsection