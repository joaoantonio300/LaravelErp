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


    Route::middleware('permission:usuarios.view')->group(function () {
        Route::get('usuarios', [UserController::class, 'index'])->name('usuarios.index');

        Route::middleware('permission:usuarios.create')->group(function () {
            Route::get('usuarios/create', [UserController::class, 'create'])->name('usuarios.create');
            Route::post('usuarios', [UserController::class, 'store'])->name('usuarios.store');
        });

        Route::middleware('permission:usuarios.edit')->group(function () {
            Route::get('usuarios/{usuario}/edit', [UserController::class, 'edit'])->name('usuarios.edit');
            Route::put('usuarios/{usuario}', [UserController::class, 'update'])->name('usuarios.update');
        });

        Route::middleware('permission:usuarios.delete')->delete('usuarios/{usuario}', [UserController::class, 'destroy'])
            ->name('usuarios.destroy');
    });

    Route::middleware('permission:produtos.view')->group(function () {
        Route::get('produtos', [ProdutoController::class, 'index'])->name('produtos.index');

        Route::middleware('permission:produtos.create')->group(function () {
            Route::get('produtos/create', [ProdutoController::class, 'create'])->name('produtos.create');
            Route::post('produtos', [ProdutoController::class, 'store'])->name('produtos.store');
        });

        Route::middleware('permission:produtos.edit')->group(function () {
            Route::get('produtos/{produto}/edit', [ProdutoController::class, 'edit'])->name('produtos.edit');
            Route::put('produtos/{produto}', [ProdutoController::class, 'update'])->name('produtos.update');
        });

        Route::middleware('permission:produtos.delete')->delete('produtos/{produto}', [ProdutoController::class, 'destroy'])
            ->name('produtos.destroy');
    });

    Route::middleware('permission:movimentacoes.view')->group(function () {
        Route::get('movimentacaos', [MovimentacaoController::class, 'index'])->name('movimentacaos.index');

        Route::middleware('permission:movimentacoes.create')->group(function () {
            Route::get('movimentacaos/create', [MovimentacaoController::class, 'create'])->name('movimentacaos.create');
            Route::post('movimentacaos', [MovimentacaoController::class, 'store'])->name('movimentacaos.store');
        });

        Route::middleware('permission:movimentacoes.edit')->group(function () {
            Route::get('movimentacaos/{movimentacao}/edit', [MovimentacaoController::class, 'edit'])->name('movimentacaos.edit');
            Route::put('movimentacaos/{movimentacao}', [MovimentacaoController::class, 'update'])->name('movimentacaos.update');
        });

        Route::middleware('permission:movimentacoes.delete')->delete('movimentacaos/{movimentacao}', [MovimentacaoController::class, 'destroy'])
            ->name('movimentacaos.destroy');
    });

    Route::middleware('permission:roles.view')->group(function () {
        Route::get('permissoes', [RoleController::class, 'index'])->name('roles.index');
        Route::middleware('permission:roles.create')->group(function () {
            Route::get('permissoes/create', [RoleController::class, 'create'])->name('roles.create');
            Route::post('permissoes', [RoleController::class, 'store'])->name('roles.store');
        });
        Route::middleware('permission:roles.edit')->group(function () {
            Route::get('permissoes/{permissao}/edit', [RoleController::class, 'edit'])->name('roles.edit');
            Route::put('permissoes/{permissao}', [RoleController::class, 'update'])->name('roles.update');
        });
        Route::middleware('permission:roles.delete')->group(function () {
            Route::delete('permissoes/{permissao}', [RoleController::class, 'destroy'])->name('roles.destroy');
        });
    });

    Route::get('relatorios', [RelatorioController::class, 'index'])
        ->middleware('permission:relatorios.view')
        ->name('relatorios.index');

    Route::get('estoque', [EstoqueController::class, 'index'])
        ->middleware('permission:estoque.view')
        ->name('estoque.index');
});