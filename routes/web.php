<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovimentacaoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\MovimentacaoReportController;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;


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

    Route::resource('roles', RoleController::class);

    Route::get('usuarios', [UserController::class, 'index'])
        ->middleware('permission:usuarios.view')
        ->name('usuarios.index');
    Route::get('usuarios/create', [UserController::class, 'create'])
        ->middleware('permission:usuarios.create')
        ->name('usuarios.create');
    Route::post('usuarios', [UserController::class, 'store'])
        ->middleware('permission:usuarios.create')
        ->name('usuarios.store');
    Route::get('usuarios/{usuario}/edit', [UserController::class, 'edit'])
        ->middleware('permission:usuarios.edit')
        ->name('usuarios.edit');
    Route::put('usuarios/{usuario}', [UserController::class, 'update'])
        ->middleware('permission:usuarios.edit')
        ->name('usuarios.update');
    Route::delete('usuarios/{usuario}', [UserController::class, 'destroy'])
        ->middleware('permission:usuarios.delete')
        ->name('usuarios.destroy');

    Route::get('produtos', [ProdutoController::class, 'index'])
        ->middleware('permission:produtos.view')
        ->name('produtos.index');
    Route::get('produtos/create', [ProdutoController::class, 'create'])
        ->middleware('permission:produtos.create')
        ->name('produtos.create');
    Route::post('produtos', [ProdutoController::class, 'store'])
        ->middleware('permission:produtos.create')
        ->name('produtos.store');
    Route::get('produtos/{produto}/edit', [ProdutoController::class, 'edit'])
        ->middleware('permission:produtos.edit')
        ->name('produtos.edit');
    Route::put('produtos/{produto}', [ProdutoController::class, 'update'])
        ->middleware('permission:produtos.edit')
        ->name('produtos.update');
    Route::delete('produtos/{produto}', [ProdutoController::class, 'destroy'])
        ->middleware('permission:produtos.delete')
        ->name('produtos.destroy');

    Route::get('movimentacaos', [MovimentacaoController::class, 'index'])
        ->middleware('permission:movimentacoes.view')
        ->name('movimentacaos.index');
    Route::get('movimentacaos/create', [MovimentacaoController::class, 'create'])
        ->middleware('permission:movimentacoes.create')
        ->name('movimentacaos.create');
    Route::post('movimentacaos', [MovimentacaoController::class, 'store'])
        ->middleware('permission:movimentacoes.create')
        ->name('movimentacaos.store');
    Route::get('movimentacaos/{movimentacao}/edit', [MovimentacaoController::class, 'edit'])
        ->middleware('permission:movimentacoes.edit')
        ->name('movimentacaos.edit');
    Route::put('movimentacaos/{movimentacao}', [MovimentacaoController::class, 'update'])
        ->middleware('permission:movimentacoes.edit')
        ->name('movimentacaos.update');
    Route::delete('movimentacaos/{movimentacao}', [MovimentacaoController::class, 'destroy'])
        ->middleware('permission:movimentacoes.delete')
        ->name('movimentacaos.destroy');

    Route::get('relatorios', [RelatorioController::class, 'index'])
        ->middleware('permission:relatorios.view')
        ->name('relatorios.index');

    Route::get('estoque', [EstoqueController::class, 'index'])
        ->middleware('permission:estoque.view')
        ->name('estoque.index');
});