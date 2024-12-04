<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\VisiteurController;

//Route pour la partie visiteur - utilisation d'un controlleur
Route::controller(VisiteurController::class)->group(function () {
  Route::get('/', "layout")->name("layout"); //Exécute la fonction accueil présent dans VisiteurController
  Route::get('/navigation', "navigation")->name("navigation");
  Route::get('/presentation', "presentation")->name("presentation");
  Route::get('/mf1', "mf1")->name("Formation MF1");
  Route::get('/mf2', "mf2")->name("Formation MF2");
  Route::get('/contact', "contact")->name("contact");
  Route::get('/mentionslegales', "mentionslegales")->name("mentionslegales");
});

