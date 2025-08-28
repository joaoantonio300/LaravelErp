<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovimentacaoController;
use App\Http\Controllers\ProdutoController;
use  App\Http\Controllers\MovimentacaoReportController;
use  App\Http\Controllers\RelatorioController;
use  App\Http\Controllers\EstoqueController;


Route::get('relatorio/movimentacoes/geral', [MovimentacaoReportController::class, 'exportPdf']);

Route::resource('produtos', ProdutoController::class);

Route::resource('relatorios', RelatorioController::class);

Route::resource('movimentacaos', MovimentacaoController::class);

Route::resource('estoque', EstoqueController::class);