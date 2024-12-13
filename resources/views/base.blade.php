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
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <script type="text/javascript" src="/javascript/bootstrap/bootstrap.bundle.min.js"></script>
    <!--<script type="text/javascript" src="/js/axios.min.js"></script>-->
    <!--<script type="text/javascript" src="/js/app.js"></script>-->
  </head>
  <body>
    @include('entete')
    <div class="corps">
      <div class="contenu">
        <div class="container-fluid">
          @yield("contenu")
          <img class="rounded float-right" src="/images/logoGwenrann_1.jpg" alt="Logo du site web"></a>         
        </div>
      </div>
    </div>
  @include('footer') 
  </body>
</html>