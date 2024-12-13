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
  public function accueil() {
    return view('accueil'); //Affiche la vue accueil.blade.php présent le dossier ressources/view
  }

  /**
   * Affichage de la page de formation
   *
   * @return \Illuminate\Contracts\View\View
   */

  public function formation() {
    return view('formation');
  }

  /**
   * Affichage de la page information MF1
   *
   * @return \Illuminate\Contracts\View\View
   */
  public function mf1() {
    return view('mf1');
  }

  /**
   * Affichage de la page information MF2
   *
   * @return \Illuminate\Contracts\View\View
   */
  public function mf2() {
    return view('mf2');
  }

  /**
   * Affichage de la page information Niveau 4 Guide de Palanquée
   *
   * @return \Illuminate\Contracts\View\View
   */
  public function niveau4() {
    return view('niveau4');
  }

  /**
   * Affichage de la page de contact
   *
   * @return \Illuminate\Contracts\View\View
   */
  public function contact() {
    return view('contact');
  }

  /**
   * Affichage de la page mentions légales
   *
   * @return \Illuminate\Contracts\View\View
   */
  public function mentionslegales() {
    return view('mentionslegales');
  }
}