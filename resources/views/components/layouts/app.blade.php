<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto IOT</title>
    
    <!-- CSS Oficial do Bootstrap v5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    @livewireStyles


  </head>

  <body>
    <style>
  #pushSidebar { width: 260px; transition: margin-left .25s ease; }
  #pushSidebar.collapsed { margin-left: -260px; }
</style>

<div class="d-flex overflow-hidden" style="min-height: 100vh">
  <nav id="pushSidebar" class="d-flex flex-column flex-shrink-0 bg-body border-end p-3">
    <a href="#" class="mb-3 link-body-emphasis text-decoration-none fs-5 fw-bold"><i class="bi bi-router me-2 fs-4"></i> ProjetoIOT</a>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item"><a class="nav-link active" aria-current="page" href="/dashboard"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a></li>
      <li class="nav-item"><a class="nav-link" href="/ambiente"><i class="bi bi-door-open"></i>  Ambientes</a></li>
      <li class="nav-item">
        <button class="nav-link w-100 text-start d-flex align-items-center" data-bs-toggle="collapse" data-bs-target="#sensor" aria-expanded="true" aria-controls="sensor">
         <i class="bi bi-cpu me-2"></i> Sensores<i class="bi bi-chevron-down ms-auto small"></i>
        </button>
        <div class="collapse show" id="sensor">
          <ul class="nav flex-column ms-4 border-start ps-2">
            <li><a class="nav-link py-1" href="sensor/create">Adicionar Sensor</a></li>
            <li><a class="nav-link py-1" href="/sensor">Monitorar sensores</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
  <div class="flex-grow-1">
    <header class="border-bottom p-2">
      <button class="btn btn-outline-secondary" onclick="document.getElementById('pushSidebar').classList.toggle('collapsed')" aria-label="Toggle sidebar" aria-expanded="true">
        <i class="bi bi-layout-sidebar"></i>
      </button>
    </header>
    <main class="p-4"><!-- content reflows when the sidebar collapses --></main>
    
  </div>
</div>
  </body>

        </div>
      </div>
    </nav>

    <!-- Conteúdo Dinâmico do Laravel / Livewire -->
    <main style="padding: 30px; flex-grow: 1;">
                    <div class="container-fluid p-0">
                        {{ $slot }}
                    </div>
                </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    @livewireScripts
  </body>
</html>
