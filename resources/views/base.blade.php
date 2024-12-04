
  <body>
    <div class="entete">
      @include("navigation")
      <div class="row">
        <div class="span7">
          <div id="moncorrousel" class="carousel slide">
            <div class="carousel-inner">
              <div class="item">
                <img src="./images/nage.jpg" alt="">
                <div class="carousel-caption">
                  <p> La nage...</p>
                </div>
              </div>
              <div class="item">
                <img src="./images/02.jpg" alt="">
                <div class="carousel-caption">
                  <h4>A l'eau</h4>
                  <p> Kiki et compagnie!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      <div class="logo">
      <a class="navbar-brand" href="#"><img src="./images/logoGwenrann_droite.png" alt="Logo du site web"></a>
      </div>
    </div>
    </div>
    <div class="corps">
      <div class="contenu">
        <div class="container-fluid">
          @yield("contenu")
        </div>
      </div>
    </div>
</div>
    
  </body>
</html>