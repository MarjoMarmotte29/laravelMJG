@extends("entete")

<div class="dropdown">
    <div>
    <a class="nav-item nav-link {{ Route::is('accueil') ? "active" : "" }}" href="#">Formation</a>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">    
    <li><a class="nav-item nav-link {{ Route::is('mf1') ? "active" : "" }}" href="/mf1">mf1</a></li>
    <li><a class="nav-item nav-link {{ Route::is('mf2') ? "active" : "" }}" href="/mf2">mf2</a></li>
    <li><a class="nav-item nav-link {{ Route::is('niveau4') ? "active" : "" }}" href="/niveau4">Guide de Palanquée</a></li>
  </ul>
</div>