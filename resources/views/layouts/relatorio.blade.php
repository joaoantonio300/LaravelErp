<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            font-size: 11px;
            line-height: 1.4;
            margin: 15px;
            color: #333;
        }

        .page-break {
            page-break-after: always;
        }

        .header {
            width: 100%;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header .title {
            font-size: 18px;
            font-weight: bold;
        }

        .header .subtitle {
            font-size: 12px;
            color: #555;
            margin-top: 2px;
        }

        .header img {
            width: 120px;
            object-fit: contain;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            page-break-inside: auto;
        }

        thead {
            background-color: #0073e6;
            color: #fff;
            font-weight: bold;
            font-size: 10px;
        }

        thead th {
            padding: 6px;
            text-align: center;
            border: 1px solid #ccc;
        }

        tbody td {
            padding: 5px;
            border: 1px solid #ccc;
            font-size: 10px;
        }

        tbody tr:nth-child(even) {
            background-color: #f4f6f8;
        }

        tfoot {
            background-color: #e0e0e0;
            font-weight: bold;
        }

        tfoot td {
            padding: 6px;
            border-top: 1px solid #ccc;
        }

        .highlight {
            background-color: #fff59d;
            font-weight: bold;
        }

        .success {
            background-color: #c8e6c9;
        }

        .danger {
            background-color: #ffcdd2;
        }

        .info {
            background-color: #b3e5fc;
        }

        .text-left {
            text-align: left;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .padding-sm {
            padding: 3px !important;
        }

        .padding-md {
            padding: 6px !important;
        }

        .padding-lg {
            padding: 10px !important;
        }

        .arrow-up {
            width: 0;
            height: 0;
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            border-bottom: 8px solid #3d9970;
            display: inline-block;
        }

        .arrow-down {
            width: 0;
            height: 0;
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            border-top: 8px solid #dd4b39;
            display: inline-block;
        }
    </style>
</head>

<body>

<div class="header">
    <div>
        <h1 class="title">ERP</h1>
        <h2 class="subtitle">@yield('title')</h2>
    </div>
</div>

<div class="content">
    @yield('content')
</div>

<script type="text/php">
    if (isset($pdf)) {
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
</body>

</html>
