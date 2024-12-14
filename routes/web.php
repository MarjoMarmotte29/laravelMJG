<?php

use App\Http\Controllers\VisiteurController;
use Illuminate\Support\Facades\Route;

//Route pour la partie visiteur - utilisation d'un controlleur
Route::controller(VisiteurController::class)->group(function () {
  Route::get('/', "accueil")->name("accueil"); //Exécute la fonction accueil présent dans VisiteurController
  Route::get('/formation', "formation")->name("formation");
  Route::get('/mf1', "mf1")->name("mf1");
  Route::get('/mf2', "mf2")->name("mf2");
  Route::get('/niveau4', "niveau4")->name("niveau4");
  Route::get('/contact', "contact")->name("contact");
  Route::get('/mentionslegales', "mentionslegales")->name("mentionslegales");
  Route::get('sliders', [SliderController::class, 'index']);
});
