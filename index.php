
<?php
require 'view/header.php';
?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="view/img/kid.jpg" alt="...">
      <div class="carousel-caption">
        <div class="intro">
          <p>Créée en février 2017, l’association Enfance et Internet est une association à but non lucratif</p>
          <p><a href="#" class="a-propos">A propos</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="view/img/kid2.jpg" alt="...">
      <div class="carousel-caption">
        <div class="intro">
          <p>Nos missions principales la protection, la préservation et l’éducation des enfants et adolescents sur Internet</p>
          <p><a href="#" class="a-propos">A propos</a></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container-fluid action">
  <h2>Nos actions</h2>
  <div class="col-md-3">
    <img src="view/img/intervention.png" alt="">
    <p>Les interventions dans les écoles ou institutions accueillant des enfants et adolescents</p>
  </div>
  <div class="col-md-3">
    <img src="view/img/conférence.png" alt="">
    <p>l'organisation de débat et de conférences</p>
  </div>
  <div class="col-md-3">
    <img src="view/img/sensibilisation.png" alt="">
    <p>l’organisation d’ateliers à destination des enfants et des adultes</p>
  </div>
  <div class="col-md-3">
    <img src="view/img/pub.png" alt="">
    <p>la réalisation de campagnes de communication et de sensibilisation</p>
  </div>
</div>
<div class="container last-actualité">
  <h2>Nos dernières actualités</h2>
  <div class="col-md-4">
    <img src="view/img/image1.jpg" alt="">
    <h3>Title</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>
  <div class="col-md-4">
    <img src="view/img/image2.jpg" alt="">
    <h3>Title</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>
  <div class="col-md-4">
    <img src="view/img/image3.jpg" alt="">
    <h3>Title</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

  </div>
</div>
<div class="container-fluid adhesion">
  <h2>Adhérer</h2>
  <div class="col-md-4">
    <img src="view/img/membre.png" alt="">
    <h3>Devenez bénévole</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <a href="#" class="btn">Devenir bénévole</a>
  </div>
  <div class="col-md-4">
    <img src="view/img/don.png" alt="">
    <h3>Faire un don</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <a href="#" class="btn">Faites un don</a>
  </div>
  <div class="col-md-4">
    <img src="view/img/partenaire.png" alt="">
    <h3>Devenez partenaire</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <a href="#" class="btn">Devenir partenaire</a>
  </div>
</div>
<div class="container partenaire">
<h2>Nos partenaire</h2>
<div class="col-md-4">
  <img src="view/img/partenaire1.jpg" alt="">
</div>
<div class="col-md-4">
<img src="view/img/partenaire2.jpg" alt="">
</div>
<div class="col-md-4">
  <img src="view/img/partenaire3" alt="">
</div>
</div>
<?php
require 'view/footer.php'
?>
