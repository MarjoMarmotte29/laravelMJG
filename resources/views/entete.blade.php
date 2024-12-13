<div class="entete">
      <nav class="navbar navbar-expand-lg bg-primary">       
        <div class="collapse navbar-collapse justify-content-center" id="navigationBar">
          <div class="navbar-nav">
            <a class="nav-item nav-link {{ Route::is('accueil') ? "active" : "" }}" href="#">Accueil</a>
            <a class="nav-item nav-link {{ Route::is('formation') ? "active" : "" }}" href="/formation">Formation</a>
            <a class="nav-item nav-link {{ Route::is('contact') ? "active" : "" }}" href="/contact">Contact</a>
          </div>
        </div>
       <form class="nav-search pull-right" action="recherche.html">
            <input class="search-query span-2" type="text" placeholder="Rechercher">
        </form>
      </nav>
    </div>