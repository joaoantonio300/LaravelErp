<?php
/**
 * @var View $filtro
 * @var string $url
 */
?>
<script>
$(document).ready(function() {
    jsBuilder();
});
</script>
<form target="_blank" type="get" class="ignore_disabled_submit" id="form_relatorio">
    @csrf
    <div class="row">
        <div class="col-md-12">
            {!! $filtro !!}
        </div>
    </div>
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-12">
            <button type="submit" class="btn btn-success" id="btn-pdf" formaction="{{$url}}"
                style="margin-right: 10px;">Gerar PDF</button>
            @if($hasXlsx)
            <button type="submit" id="btn-xlsx" class="xlsx btn btn-dropbox" formaction="{{$url."/xlsx"}}"
                style="margin-right: 10px;">Gerar xlsx</button>
            @endif
            @if($hasHtml)
            <button type="submit" id="btn-html" class="html btn btn-warning" formaction="{{$url."/html"}}"
                style="margin-right: 10px;">Gerar HTML</button>
            @endif
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            @if($permissaoLog)
            <a class="btn btn-default pull-right open_modal_auxiliar_ajax" href="{{$urlLog}}">
                <i class="fa fa-bar-chart" aria-hidden="true"></i>
            </a>
            @endif
        </div>
    </div>
</form>