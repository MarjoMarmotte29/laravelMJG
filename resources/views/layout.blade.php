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
    <nav class="navbar">
      <div class="navbar-menu">
        <div class="navbar-start">
          @include('partial.navbar-item', ['lien' =>'/', 'texte' => 'accueil'])
        </div>
        <div class="navbar-center">
          @include('partial.navbar-item', ['lien' =>'/', 'texte' => 'Accueil'])
          @include('partial.navbar-item', ['lien' =>'/', 'texte' => 'Formations'])
          @include('partial.navbar-item', ['lien' =>'/', 'texte' => 'Contact'])
        </div>
        <form class="nav_bar-search pull-right" action="recherche.html">
          <input class="searche-query span2" type="text" placeholder="Rechercher">
        </form>
      </nav>
  <div class="container">
    @yield('contenu')
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