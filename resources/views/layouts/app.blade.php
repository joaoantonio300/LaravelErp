<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="bg-light">
        
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">ERP</a>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer class="text-center mt-4">
        <small>&copy; {{ date('Y') }} - Meu Sistema</small>
    </footer>
</div>
</body>
</html>