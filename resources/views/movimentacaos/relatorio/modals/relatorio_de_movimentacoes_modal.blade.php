<div class="modal fade" id="modalRelatorio" tabindex="-1" aria-labelledby="modalRelatorioLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalRelatorioLabel">Filtros do Relatório</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <form target="_blank" method="get" id="form_relatorio">
                    @csrf
                    <div class="mb-3">
                        <label for="tipo_rel" class="form-label">Tipo</label>
                        <select name="tipo" id="tipo_rel" class="form-select">
                            <option value="">Todos os tipos</option>
                            <option value="entrada">Entrada</option>
                            <option value="saida">Saída</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="produto_id_rel" class="form-label">Produto</label>
                        <select name="produto_id" id="produto_id_rel" class="form-select">
                            <option value="">Todos os produtos</option>
                            @foreach(App\Models\Produto::all() as $produto)
                            <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <button type="submit" class="btn btn-success" id="btn-pdf">Gerar PDF</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>