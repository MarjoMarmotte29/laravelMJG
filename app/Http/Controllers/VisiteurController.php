<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisiteurController extends Controller
{

  /**
   * Affichage de la page accueil
   *
   * @return \Illuminate\Contracts\View\View
   */
  public function layout() {
    return view('/layout'); //Affiche la vue accueil.blade.php présent le dossier ressources/view
  }
  /**
   * Affichage de la page accueil
   *
   * @return \Illuminate\Contracts\View\View
   */
  public function accueil() {
    return view('/accueil'); //Affiche la vue accueil.blade.php présent le dossier ressources/view
  }
  /**
   * Affichage de la page navigation
   *
   * @return \Illuminate\Contracts\View\View
   */
  public function navigation() {
    return view('/navigation'); //Affiche la vue navigation.blade.php présent le dossier ressources/view
  }
/**
   * Affichage de la page de présentation
   *
   * @return \Illuminate\Contracts\View\View
   */
  public function presentation() {
    return view('/presentation');
  }
  /**
   * Affichage de la page de la formation mf1
   *
   * @return \Illuminate\Contracts\View\View
   */
  public function mf1() {
    return view('/mf1');
  }

  /**
   * Affichage de la page de formation MF2
   *
   * @return \Illuminate\Contracts\View\View
   */
  public function mf2() {
    return view('/mf2');
  }

  /**
   * Affichage de la page de contact
   *
   * @return \Illuminate\Contracts\View\View
   */
  public function contact() {
    return view('/contact');
  }

  /**
   * Affichage de la page mentions légales
   *
   * @return \Illuminate\Contracts\View\View
   */
  public function mentionslegales() {
    return view('/mentionslegales');
  }
}