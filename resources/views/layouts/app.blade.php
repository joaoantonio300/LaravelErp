<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .sidebar {
            width: 220px;
            min-height: 100vh;
            background-color: #343a40;
            color: #fff;
            padding: 1rem;
            transition: width 0.3s;
        }
        .sidebar.collapsed {
            width: 90px;
        }
        .sidebar .nav-link {
            color: #fff;
            white-space: nowrap;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .sidebar .nav-link:hover {
            background-color: #495057;
            border-radius: 5px;
        }
        .content {
            flex: 1;
            padding: 1rem;
            transition: margin-left 0.3s;
        }
        .content.expanded {
            margin-left: 220px;
        }
        .content.collapsed {
            margin-left: 60px;
        }
        .user-info {
            text-align: center;
            margin-bottom: 2rem;
            transition: all 0.3s;
        }
        .user-info img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            transition: all 0.3s;
        }
        .sidebar.collapsed .user-info img {
            width: 40px;
            height: 40px;
        }
        .sidebar.collapsed .user-info p {
            display: none;
        }
        .toggle-btn {
            cursor: pointer;
            color: #fff;
            margin-bottom: 1rem;
        }
        .sidebar .nav-link i {
            font-size: 1.2rem;
        }
        .sidebar.collapsed .nav-link span {
            display: none;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-0">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">ERP</a>
        </div>
        <form action="{{ route('logout') }}" method="POST" class="d-inline">
    @csrf
    <button type="submit" class="btn btn-danger btn-sm">
        <i class="bi bi-box-arrow-right"></i> Logout
    </button>
</form>

    </nav>

    <div class="d-flex">
        <div class="sidebar" id="sidebar">
            <div class="toggle-btn text-end">
                <span id="toggleBtn">&#9776;</span>
            </div>
            <div class="user-info">
               <img src="https://img10.hotstar.com/image/upload/f_auto,q_auto/sources/r1/cms/prod/1468/1727698041468-i" 
              alt="Foto do usuário" 
              class="w-24 h-24 rounded-full object-cover">
              <p class="mt-2">{{ auth()->user()->name ?? 'Usuário' }}</p>

            </div>
            <nav class="nav flex-column">
                <a class="nav-link" href="{{ route('estoque.index')}}"><i class="bi bi-box-seam"></i><span>Estoque</span></a>
                <a class="nav-link" href="{{ route('usuarios.index')}}"><i class="bi bi-people"></i><span>Usuários</span></a>
                <a class="nav-link" href="{{ route('produtos.index')}}"><i class="bi bi-box-seam"></i><span>Produtos</span></a>
                <a class="nav-link" href=""><i class="bi bi-tags"></i><span>Categorias</span></a>
                <a class="nav-link" href="{{ route('movimentacaos.index')}}"><i class="bi bi-arrow-left-right"></i><span>Movimentações</span>
                </a>
                <a class="nav-link" href="{{ route('relatorios.index')}}"><i class="bi bi-file-text"></i><span>Relatórios</span></a>
            </nav>
        </div>
        <div class="content expanded" id="mainContent">
            @yield('content')
        </div>
    </div>
    <footer class="text-center mt-4 py-3 bg-light">
        <small>&copy; {{ date('Y') }} - Meu Sistema</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const toggleBtn = document.getElementById('toggleBtn');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');
        const userInfo = document.querySelector('.user-info')

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('collapsed');
            mainContent.classList.toggle('expanded');
            userInfo.classList.toggle('')
        });
    </script>
</body>
</html>
