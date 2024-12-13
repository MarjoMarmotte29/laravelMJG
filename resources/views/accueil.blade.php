@extends("base")
@section("titre", "Gwenrann Formation")
@section("description", "")

@section("contenu")
  Ceci est la page d'accueil
  <div class="row">
    <div class="col-6">
      <h1><b> Formation MF1</b></h1>
      @yield('mf1')
    </div>
    <div class="col-6">
      <h1> Formation MF2</h1>
      @yield('mf2')
    </div>
    <div class="col-6">
      @yield('contact')
    </div>
  </div>
@endsection
