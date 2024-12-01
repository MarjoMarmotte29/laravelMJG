<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>@yield('titre') - Nicolas Le Dantec</title>
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
      <nav class="navbar navbar-expand-lg bg-primary">
        
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navigationBar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navigationBar">
          <div class="navbar-nav">
            <a class="nav-item nav-link {{ Route::is('accueil') ? "active" : "" }}" href="/">Accueil</a>
            <a class="nav-item nav-link {{ Route::is('presentation') ? "active" : "" }}" href="/presentation">Présentation</a>
            <a class="nav-item nav-link {{ Route::is('mf1') ? "active" : "" }}" href="/mf1">Formation MF1</a>
            <a class="nav-item nav-link {{ Route::is('mf2') ? "active" : "" }}" href="/mf2">Formation MF2</a>
          </div>
        </div>
      </nav>
      <div class="logo">
      <a class="navbar-brand" href="#"><img src="./images/logoGwenrann_droite.png" alt="Logo du site web"></a>
      </div>
    </div>
    <div class="corps">
      <div class="contenu">
        <div class="container-fluid">
          @yield("contenu")
        </div>
      </div>
    </div>
    <footer>
      <div class="row">
        <div class="col-lg-4">
          © 2024 MJo GARET &Nicilas LE DANTEC. Tous droits réservés.
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