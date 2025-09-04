<?php
/**
 * @var View $filtro
 * @var string $url
 */
?>
<form target="_blank" method="GET" class="ignore_disabled_submit" id="form_relatorio">
    <div class="row">
        <div class="col-md-12">
            {!! $filtro !!}
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            <button type="submit" class="btn btn-success me-2" formaction="{{ $url }}">Gerar PDF</button>

            @if($hasXlsx)
                <button type="submit" id="btn-xlsx" class="xlsx btn btn-dropbox me-2" formaction="{{ $url.'/xlsx' }}">
                    Gerar XLSX
                </button>
            @endif

            @if($hasHtml)
                <button type="submit" id="btn-html" class="html btn btn-warning me-2" formaction="{{ $url.'/html' }}">
                    Gerar HTML
                </button>
            @endif

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

            @if($permissaoLog)
                <a class="btn btn-secondary float-end open_modal_auxiliar_ajax" href="{{ $urlLog }}">
                    <i class="fa fa-bar-chart" aria-hidden="true"></i>
                </a>
            @endif
        </div>
    </div>
</form>

<script>
    $(document).ready(function () {
        jsBuilder();
    });
</script>
