<?php

namespace App\Repositories;

use App\Models\Movimentacao;
use App\DTOs\MovimentacaoDTO;
use Illuminate\Database\Eloquent\Collection;

class MovimentacaoRepository
{
    public function create(MovimentacaoDTO $dto): Movimentacao
    {
        return Movimentacao::create([
            'tipo' => $dto->tipo,
            'produto_id' => $dto->produto_id,
            'quantidade' => $dto->quantidade,
            'valor_unitario' => $dto->valor_unitario,
            'observacao' => $dto->observacao,
        ]);
    }

    public function findById(int $id): ?Movimentacao
    {
        return Movimentacao::find($id);
    }

    public function all(): Collection
    {
        return Movimentacao::all();
    }

    public function update(Movimentacao $movimentacao, array $data): bool
    {
        return $movimentacao->update($data);
    }

    public function delete(Movimentacao $movimentacao): bool
    {
        return $movimentacao->delete();
    }
}
