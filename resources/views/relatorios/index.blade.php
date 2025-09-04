@extends('layouts.app')

@section('title', 'Relatórios')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="mb-0">Painel de Relatórios</h1>
        </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Movimentações</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#" class="text-decoration-none movimentacoes"
                                   data-url="/relatorio/movimentacoes/geral">
                                    Relatório Geral de Movimentações
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        @include('movimentacaos.relatorio.modals.relatorio_de_movimentacoes_modal')
    </div>

    <script src="{{ asset('js/filtroMovimentacoes.js') }}"></script>
@endsection
