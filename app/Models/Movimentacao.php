<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo',
        'produto_id',
        'quantidade',
        'valor_unitario',
        'observacao',
    ];

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}