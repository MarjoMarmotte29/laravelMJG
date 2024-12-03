<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>@yield('titre')</title>
    <meta name="description" content="@yield('description')"/>

    <link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/css/theme.css">
    <link rel="stylesheet" href="/fontawesome/css/all.min.css">

    <script type="text/javascript" src="/javascript/bootstrap/bootstrap.bundle.min.js"></script>
    <!--<script type="text/javascript" src="/js/axios.min.js"></script>-->
    <!--<script type="text/javascript" src="/js/app.js"></script>-->
  </head>
  <body>
    <div class="entete">
      <div class="navbar navbar-inverse">
        <div class="navbar-inverse">
        <nav class="navbar navbar-expand-lg bg-primary">
          <div class="collapse navbar-collapse justify-content-center" id="navigationBar">
            <div class="navbar-nav">
              <a class="nav-item nav-link {{ Route::is('accueil') ? "active" : "" }}" href="/">Gwenrann Formation</a>
              <a class="nav-item nav-link {{ Route::is('presentation') ? "active" : "" }}" href="/presentation">Accueil</a>
              <a class="nav-item nav-link {{ Route::is('mf1') ? "active" : "" }}" href="/mf1">Formation</a>
              <a class="nav-item nav-link {{ Route::is('mf2') ? "active" : "" }}" href="/mf2">Contact</a>
            </div>
            <form class="nav_bar-search pull-right" action="recherche.html">
              <input class="searche-query span2" type="text" placeholder="Rechercher">
            </form>
          </div>
        </nav>
      </div>
    </div>
      <div class="row">
        <div class="span7">
          <div id="moncorrousel" class="carousel slide">
            <div class="carousel-inner">
              <div class="item">
                <img src="./images/nage.jpg" alt="">
                <div class="carousel-caption">
                  <p> La nage...</p>
                </div>
              </div>
              <div class="item">
                <img src="./images/02.jpg" alt="">
                <div class="carousel-caption">
                  <h4>A l'eau</h4>
                  <p> Kiki et compagnie!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      <div class="logo">
      <a class="navbar-brand" href="#"><img src="./images/logoGwenrann_droite.png" alt="Logo du site web"></a>
      </div>
    </div>
    </div>
    <div class="corps">
      <div class="contenu">
        <div class="container-fluid">
          @yield("contenu")
        </div>
      </div>
    </div>
</div>
    <footer>
      <div class="row">
        <div class="col-lg-4">
          <p class="pull-right">
            <a href="#">Retour en haut</a>
          </p>
          © 2024 MJo GARET &Nicolas LE DANTEC. Tous droits réservés.
        </div>
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
          <a href="/mentionslegales">Mentions légales</a> |
          <a href="/contact">Contact</a>
        </div>
      </div>
    </footer>
  </body>
</html>