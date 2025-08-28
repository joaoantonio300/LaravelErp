<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovimentacaoController;
use App\Http\Controllers\ProdutoController;


Route::resource('movimentacaos', MovimentacaoController::class);

Route::resource('produtos', ProdutoController::class);



