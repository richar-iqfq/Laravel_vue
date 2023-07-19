<!-- Barra de navegación -->
<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img
          src="{{ asset('img/ico.jfif') }}"
          alt="Logo"
          width="30"
          height="30"
          class="d-inline-block align-text-top"
          style="margin-right: 5px;"
        />CSS</a
      >
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Nuevo Usuario</a>
          </li>
          <li>
            <a class="nav-link active" href="#">Constants</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>