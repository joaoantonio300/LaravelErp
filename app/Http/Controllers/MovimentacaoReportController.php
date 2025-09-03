<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class MovimentacaoReportController extends Controller
{

    public function exportPdf(Request $request)
    {
        $query = \App\Models\Movimentacao::with('produto');

        if ($request->tipo) {
            $query->where('tipo', $request->tipo);
        }

        if ($request->produto_id) {
            $query->where('produto_id', $request->produto_id);
        }

        $movimentacaos = $query->get();
        $pdf = Pdf::loadView('movimentacaos.relatorio.relatorio_de_movimentacoes', compact('movimentacaos'));
        return $pdf->stream('relatorio_movimentacoes.pdf');
    }
<<<<<<< HEAD
}
=======

}
>>>>>>> 42421110a5a917b0596aceb240f9d2f6c46997f7
