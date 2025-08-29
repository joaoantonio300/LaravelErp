<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovimentacaoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\MovimentacaoReportController;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('relatorio/movimentacoes/geral', [MovimentacaoReportController::class, 'exportPdf']);

    Route::get('/', function () {
        return view('home.home'); 
    });

    Route::resource('produtos', ProdutoController::class);
    Route::resource('relatorios', RelatorioController::class);
    Route::resource('movimentacaos', MovimentacaoController::class);
    Route::resource('estoque', EstoqueController::class);
    Route::resource('usuarios', UserController::class);
});
