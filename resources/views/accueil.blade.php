@extends("base")
@section("titre", "Gwenrann Formation")
@section("description", "")

@section("contenu")
  Ceci est la page d'accueil
  <div class="column">
    <div class="col-6">
      <h1><b> Formation MF1</b></h1>
      @yield('mf1')
    </div>
    <div class="col-6">
      <h1> Formation MF2</h1>
      @yield('mf2')
    </div>
    <div class="col-6">
    <h1> Formation Guide de Palanquée</h1>
      @yield('niveau4')
    </div>
    <div class="col-6">
    <h1> Contact</h1>
      @yield('contact')
    </div>
  </div>
@endsection
