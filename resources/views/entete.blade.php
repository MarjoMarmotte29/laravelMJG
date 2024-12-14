<div class="entete">
  <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid" id="navigationBar">
        <a class="navbar-brand" {{ Route::is('accueil') ? "active" : "" }}" href="/">Gwenrann Formation</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ Route::is('accueil') ? "active" : "" }}" href="/">Accueil</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"{{ Route::is('formation') ? "active" : "" }}" href="/formation">Formation</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" {{ Route::is('mf1') ? "active" : "" }}" href="/mf1">mf1</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" {{ Route::is('mf2') ? "active" : "" }}" href="/mf2">mf2</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item "{{ Route::is('niveau4') ? "active" : "" }}" href="/niveau4">Guide de Palanquée</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
        <li class="nav-item">
            <a class="nav-item nav-link {{ Route::is('contact') ? "active" : "" }}" href="/contact">Contact</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Rechercher</button>
    </form>
      </div>
    </div>      
  </nav>
</div>