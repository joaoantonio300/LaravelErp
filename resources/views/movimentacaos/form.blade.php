<div class="mb-3">
    <label for="tipo" class="form-label">Tipo</label>
    <select name="tipo" id="tipo" class="form-control" required>
        <option value="entrada" {{ ($movimentacao->tipo ?? '') === 'entrada' ? 'selected' : '' }}>Entrada</option>
        <option value="saida" {{ ($movimentacao->tipo ?? '') === 'saida' ? 'selected' : '' }}>Saída</option>
    </select>
</div>

<div class="mb-3">
    <label for="produto_id" class="form-label">Produto</label>
    <select name="produto_id" id="produto_id" class="form-control" required>
        <option value="">Selecione um produto</option>
        @foreach($produtos as $produto)
            <option
                value="{{ $produto->id }}" {{ old('produto_id', $movimentacao->produto_id ?? '') == $produto->id ? 'selected' : '' }}>
                {{ $produto->nome }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="quantidade" class="form-label">Quantidade</label>
    <input type="number" name="quantidade" id="quantidade"
           value="{{ old('quantidade', $movimentacao->quantidade ?? '') }}"
           class="form-control" required>
</div>

<div class="mb-3">
    <label for="valor_unitario" class="form-label">Valor Unitário</label>
    <input type="text" name="valor_unitario" id="valor_unitario"
           value="{{ old('valor_unitario', $movimentacao->valor_unitario ?? '') }}"
           class="form-control">
</div>

<div class="mb-3">
    <label for="observacao" class="form-label">Observação</label>
    <textarea name="observacao" id="observacao"
              class="form-control">{{ old('observacao', $movimentacao->observacao ?? '') }}</textarea>
</div>
