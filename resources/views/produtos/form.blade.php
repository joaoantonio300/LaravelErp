<div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome', $produto->nome ?? '') }}"
        required>
</div>

<div class="mb-3">
    <label for="descricao" class="form-label">Descrição</label>
    <textarea name="descricao" id="descricao"
<<<<<<< HEAD
        class="form-control">{{ old('descricao', $produto->descricao ?? '') }}</textarea>
</div>
=======
              class="form-control">{{ old('descricao', $produto->descricao ?? '') }}</textarea>
</div>
>>>>>>> 42421110a5a917b0596aceb240f9d2f6c46997f7
