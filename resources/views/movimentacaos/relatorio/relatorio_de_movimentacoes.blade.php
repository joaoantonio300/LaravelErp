@extends('layouts.relatorio')
<?php
/**
 * @var \Illuminate\Support\Collection $movimentacaos
 */
?>
@section('title', 'Relatorio de Movimentações')

@section('content')

<table class="tabela" cellpadding="0" cellspacing="0" width="100%">
    <thead>
        <tr>
            <td width="30%">Tipo</td>
            <td width="30%">Produto</td>
            <td width="30%">Quantidade</td>
            <td width="30%">Valor Unitario</td>
        </tr>
<<<<<<< HEAD
    </thead>
    <tbody>
        @foreach($movimentacaos as $mov)
        <tr>
            <td>{{$mov->tipo}}</td>
            <td>{{$mov->produto->nome}}</td>
            <td>{{$mov->quantidade}}</td>
            <td>{{$mov->valor_unitario}}</td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection
=======
        </thead>
        <tbody>
        @foreach($movimentacaos as $mov)
            <tr>
                <td>{{$mov->tipo}}</td>
                <td>{{$mov->produto->nome}}</td>
                <td>{{$mov->quantidade}}</td>
                <td>{{$mov->valor_unitario}}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection
>>>>>>> 42421110a5a917b0596aceb240f9d2f6c46997f7
