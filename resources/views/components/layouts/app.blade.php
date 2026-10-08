<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Projeto IoT Escolar' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @livewireStyles
    <style>
        body { background: #f5f7fb; }
        .sidebar { width: 250px; min-height: 100vh; transition: margin-left .2s ease; }
        .sidebar.collapsed { margin-left: -250px; }
        .brand { color: #0d6efd; }
        .nav-link { color: #495057; border-radius: .5rem; }
        .nav-link:hover, .nav-link.active { color: #0d6efd; background: #e9f2ff; }
        .content { min-width: 0; }
        .stat-card { border: 0; box-shadow: 0 .125rem .5rem rgba(0,0,0,.06); }
    </style>
</head>
<body>
<div class="d-flex min-vh-100">
    <aside id="sidebar" class="sidebar flex-shrink-0 bg-white border-end p-3">
        <a href="{{ route('dashboard') }}" class="d-flex align-items-center gap-2 text-decoration-none fw-bold fs-5 mb-4 brand">
            <i class="bi bi-cpu-fill"></i> Projeto IoT
        </a>
        <div class="text-uppercase text-secondary small fw-semibold mb-2">Menu principal</div>
        <nav class="nav nav-pills flex-column gap-1">
            <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                <i class="bi bi-speedometer2 me-2"></i>Dashboard
            </a>
            <a class="nav-link {{ request()->routeIs('ambiente.*') ? 'active' : '' }}" href="{{ route('ambiente.index') }}">
                <i class="bi bi-building me-2"></i>Ambientes
            </a>
            <a class="nav-link {{ request()->routeIs('sensor.*') ? 'active' : '' }}" href="{{ route('sensor.index') }}">
                <i class="bi bi-broadcast-pin me-2"></i>Sensores
            </a>
        </nav>
    </aside>

    <div class="content flex-grow-1">
        <header class="bg-white border-bottom px-4 py-3 d-flex align-items-center justify-content-between">
            <button class="btn btn-outline-secondary" type="button" onclick="document.getElementById('sidebar').classList.toggle('collapsed')" aria-label="Alternar menu">
                <i class="bi bi-list"></i>
            </button>
            <span class="text-secondary small">Monitoramento da escola</span>
        </header>

        <main class="container-fluid p-4">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="bi bi-exclamation-circle me-2"></i>{{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
            {{ $slot }}
        </main>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
@livewireScripts
</body>
</html>
