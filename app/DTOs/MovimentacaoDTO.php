<?php

namespace App\DTOs;

class MovimentacaoDTO
{
    public function __construct(
        public string  $tipo,
        public int     $produto_id,
        public int     $quantidade,
        public ?float  $valor_unitario,
        public ?string $observacao = null,
    )
    {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            tipo: $data['tipo'],
            produto_id: (int)$data['produto_id'],
            quantidade: (int)$data['quantidade'],
            valor_unitario: isset($data['valor_unitario']) ? (float)$data['valor_unitario'] : null,
            observacao: $data['observacao'] ?? null,
        );
    }
}
