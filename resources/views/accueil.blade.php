@extends("base")
@section("titre", "Gwenrann Formation")

@section("contenu")
  

<div>
   <p>Ici il y aura le carousel Photos</p>
</div>
<div class="d-flex flex-row mb-3 d-flex justify-content-end">
   @include('formation')
</div>
<div class="col-6">
  <h1> Contact</h1>
    @yield('contact')
</div>

@endsection
