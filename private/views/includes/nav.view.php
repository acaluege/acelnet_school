<nav class="navbar navbar-expand-lg navbar-light bg-light p-2">
  <a class="navbar-brand" href="#">
      <img src="<?=ROOT?>/assets/logo.png" class="border border-primary" style="width:50px;">
      Minha Escola
    </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link active" href="#">DASHBOARD</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">TURMAS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">EXAMES</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          USUARIO
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Perfil</a>
          <a class="dropdown-item" href="#">Dashboard</a>
            <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Sair</a>
        </div>
      </li>
    </ul>
  </div>
</nav>