<div class="entete">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid" id="navigationBar">        
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item text-light">
            <a class="navbar-brand" {{ Route::is('accueil') ? "active" : "" }}" href="/">Gwenrann Formation</a>
          </li>
          <li class="nav-item text-light">
            <a class="nav-link {{ Route::is('accueil') ? "active" : "" }}" href="/">Accueil</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"{{ Route::is('formation') ? "active" : "" }}" href="/formation">Formation</a>
            <ul class="dropdown-menu">
              <a class="dropdown-item text-light" {{ Route::is('mf1') ? "active" : "" }}" href="/mf1">mf1</a>
              <a class="dropdown-item" {{ Route::is('mf2') ? "active" : "" }}" href="/mf2">mf2</a>
              <a class="dropdown-item "{{ Route::is('niveau4') ? "active" : "" }}" href="/niveau4">Guide de Palanquée</a>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-item nav-link {{ Route::is('contact') ? "active" : "" }}" href="/contact">Contact</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2 rounded" type="search" placeholder="Rechercher" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0 rounded" type="submit">Rechercher</button>
        </form>
      </div>
    </div>      
  </nav>
</div>