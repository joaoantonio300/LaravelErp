<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovimentacaoController;


Route::resource('movimentacaos', MovimentacaoController::class);



