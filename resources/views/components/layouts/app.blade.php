<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto IOT</title>
    
    <!-- CSS Oficial do Bootstrap 4 (Caminho Completo Correto) -->
    <link rel="stylesheet" href="https://jsdelivr.net" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    <!-- Link Oficial do Bootstrap Icons (Caminho Completo Correto) -->
    <link rel="stylesheet" href="https://jsdelivr.net">
    
    <!-- Estilos do Livewire -->
    @livewireStyles
  </head>

  <body>

    <!-- Menu de Navegação (Navbar) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Projeto IOT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <!-- Dashboard -->
            <li class="nav-item active">
              <a class="nav-link" href="#">
                <i class="bi bi-speedometer2 mr-1"></i> Dashboard
              </a>
            </li>
            <!-- Ambientes -->
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="bi bi-building mr-1"></i> Ambientes
              </a>
            </li>
            <!-- Registros / Logs (Corrigido ícone correspondente) -->
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="bi bi-database mr-1"></i> Registros
              </a>
            </li>
            <!-- Sensores (Dropdown corrigido com ícone de CPU) -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bi bi-cpu mr-1"></i> Sensores
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Listar Sensores</a>
                <a class="dropdown-item" href="#">Adicionar Sensor</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Conteúdo Dinâmico -->
    <main class="container-fluid mt-4">
        {{ $slot }}
    </main>

    <!-- Scripts do Bootstrap 4 e jQuery (Caminhos Completos Corretos) -->
    <script src="https://jsdelivr.net" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://jsdelivr.net" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    
    <!-- Scripts do Livewire -->
    @livewireScripts
  </body>
</html>
