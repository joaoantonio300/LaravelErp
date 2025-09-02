<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    border-collapse: collapse;
    font-size: 10px;
}

table {
    width: 100%;
}

.border-none {
    border: none !important;
}

.primary-color {
    background-color: #dadada;
    font-size: 12px;
    border: none !important;
    margin-top: 7px !important;
    color: #0a0a0a;
}

.secondary-color {
    background-color: #fff3a7;
    font-size: 10px;
    border: none !important;
    color: #0a0a0a;
}

.third-color {
    background-color: #dcb4fc;
    font-size: 10px;
    border: none !important;
    color: #0a0a0a;
}

.fourth-color {
    background-color: white;
    font-size: 10px;
    border-top: 1px solid #bdbdbd !important;
    border-bottom: 1px solid #bdbdbd !important;
    color: #0a0a0a;
}

.fifth-color {
    background-color: #98e8fb;
    font-size: 12px;
    border: none !important;
    margin-top: 7px !important;
    color: #0a0a0a;
}

.tabela tr.grouprow {
    background-color: #d1c4e9;
    font-weight: bold;
}

.tabela tr.grouprow2,
.tabela td.groupcol2 {
    background-color: #ebe0ff;
    font-weight: bold;
}

.tabela tr.grouprow3,
.tabela td.groupcol3 {
    background-color: #e5d4ff;
    font-weight: bold;
}

tr.bold-row {
    font-weight: bold;
}

.tabela tr.odd {
    background-color: #eeeeee;
}

.tabela td.odd {
    background-color: #eeeeee;
}

.tabela tr.subrow {
    background-color: #fffde7;
}

.tabela tr.subrow-foot {
    background-color: #e6e6e6;
    font-weight: bold;
}

.tabela tr.subrow2 {
    background-color: #fffef2;
}

.tabela tr.subrow3 {
    background-color: #ffa726;
}

.tabela td.destaque,
.tabela tr.destaque {
    background-color: #ffeb3b;
}

.tabela tr.success,
.tabela td.success {
    background-color: #4caf50;
}

.tabela td.destaqueRed,
.tabela tr.destaqueRed {
    background-color: #e57373;
}

.text-red {
    color: red;
}

.background-green {
    background-color: #e8f5e9;
}

.background-red {
    background-color: #FB5555;
}

.red-mark {
    border-right: 2px solid #b71c1c !important;
}

.primary-color th {
    padding: 3px !important;
}

.fourth-color th {
    padding: 3px !important;
}

.third-color th {
    padding: 3px !important;
}

.third-color td {
    padding: 3px !important;
}

tfoot {
    display: table-row-group;
}

.primary-color td {
    padding-top: 3px !important;
    padding-bottom: 3px !important;
}

.secondary-color th {
    padding: 3px !important;
}

.secondary-color td {
    padding: 3px !important;
}

.text-align-right {
    text-align: right !important;
}

.text-align-left {
    text-align: left !important;
}

.text-align-center {
    text-align: center !important;
}

.padding-left {
    padding-left: 3px !important;
}

.padding-right {
    padding-right: 3px !important;
}

.padding-bottom td {
    padding-bottom: 4px !important;
}

.spacing-td td {
    padding-top: 7px !important;
}

.spacing-th th {
    padding-top: 7px !important;
}

.border-top-td td {
    border: 1px solid #a9a7a7 !important;
}

.border-left {
    border-left: 1px solid #a9a7a7 !important;
}

.border-right {
    border-right: 1px solid #a9a7a7 !important;
}

.border-top {
    border-top: 1px solid #a9a7a7 !important;
}

.border-bottom {
    border-bottom: 1px solid #a9a7a7 !important;
}

.border-only-right {
    border-right: 1px solid #bdbdbd !important;
}

.border-top-right {
    border-right: 1px solid #bdbdbd !important;
    border-top: 1px solid #bdbdbd !important;
}

.border-right {
    border-right: 1px solid #a9a7a7 !important;
}

.border-bottom {
    border-bottom: 1px solid #a9a7a7 !important;
}

.border-bottom-td td {
    border-bottom: 1px solid #a9a7a7 !important;
    padding-bottom: 4px;
}

.border-bottom-th th {
    border-bottom: 1px solid #a9a7a7 !important;
    padding-bottom: 4px;
}

.space-beetwen-right-left {
    padding-left: 5px !important;
    padding-right: 5px !important;
}

.padding-top-td td {
    padding-top: 5px !important;
}

.padding-bottom-td td {
    padding-bottom: 5px !important;
}

.padding-left-td td {
    padding-left: 5px !important;
}

.padding-right-td td {
    padding-right: 5px !important;
}

* {
    margin: 0;
    padding: 0;
    font-family: "Arial Black", arial-black, Sans-Serif;
}

body {
    font-family: "Arial Black", arial-black, Sans-Serif;
    font-size: 11px;
    margin: 10px;
}

.page-break {
    page-break-after: always;
}

.tabela thead {
    font-size: 9px;
    text-align: center;

    background-color: #757575;
    font-weight: bold;
    color: white;
}

.tabela thead td {
    padding: 3px;
}

.tabela tfoot {
    background-color: #bdbdbd;
    font-weight: bold;
}

.tabela tfoot tr {
    background-color: #bdbdbd;
}

.tabela tfoot td {
    padding: 3px;
}

.tabela td {
    border: 1px solid #bdbdbd;
    padding: 3px;
}

.header img {
    text-align: right;
    margin-top: -80px;
    width: 150px;
}

.header .title,
.header .subtitle,
.header .data {
    font-size: 14px;
    right: 0;
    text-align: right;
    margin-bottom: 5px;
}

.header .subtitle,
.header .data {
    font-size: 12px;
    font-weight: normal;
}

.content {
    width: 100%;
    margin-top: 15px;
}

.filtro {
    margin-bottom: 3px;
}

.cifrao {
    float: left;
    margin-left: 0;
}

tr,
td,
th,
thead,
tfoot {
    page-break-inside: avoid !important;
}

.arrow-container {
    display: inline-block;
    position: relative;
    vertical-align: middle;
}

.arrow-up {
    width: 0;
    height: 0;
    top: -0.5;
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-bottom: 8px solid #3d9970;
    position: relative;
}

.arrow-down {
    width: 0;
    height: 0;
    top: 1;
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-top: 8px solid #dd4b39;
    position: relative;
}

.bg-green-light {
    background-color: #e4ffe4;
}

.bg-blue {
    color: blue;
}

.bg-yellow {
    color: #FFA000;
}

.bg-green {
    color: green;
}

.bg-red {
    color: red;
}

.bg-purple {
    color: blueviolet;
}
</style>

<body>
    <div class="header">
        <div class="float: right;">
            <h1 class="title">ERP</h1>
            <h2 class="subtitle">@yield('title')</h2>
            <h2 class="data">{{date("d/m/Y H:i:s")}}</h2>
        </div>
    </div>
    <div style="margin-bottom: 10px">
        @yield('content')
    </div>
    <div>
        <script type="text/php">
            if (isset($pdf))
            {
                $pdf->page_text(
                    $pdf->get_width() - 25,
                    $pdf->get_height() - 12,
                    "{PAGE_NUM} / {PAGE_COUNT}",
                    null,
                    7,
                    array(0,0,0)
                );
            }
        </script>
    </div>
</body>

</html>