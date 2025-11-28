
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Books Store</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/stylemenu.css">
  <link rel="stylesheet" href="css/styleheader.css">
  <link rel="stylesheet" href="css/stylefooter.css">
  <link rel="icon" href="assets/img/logo.png" type="">
<!-- CSS de Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- jQuery (necesario para algunas funciones de Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Popper.js (necesario para algunos componentes de Bootstrap que requieren tooltips y popovers) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</head>
  
<body style="opacity: 75; background-image: url('assets/img/fondoBliblioteca.jpg'); width: 100%;
height: auto; background-repeat: no-repeat;background-position: center;
background-attachment: fixed; background-size: cover;">  
<br></br>
<br></br>
<br></br>







<!-- Header-->
<?php include ("php/header.php");?>
<!-- Header-->




<!-- Carrusel-->
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <br></br>
      <img src="assets/img/libro-abierto.avif" class="d-block w-100 carousel-img" alt="...">
      <br></br>
    
      <div class="carousel-caption d-none d-md-block hero-quote">
        <div class="quote-wrapper">
          <h1>“La lectura nos da un lugar adonde ir cuando debemos permanecer donde estamos.”</h1>
          <p class="author">— Mason Cooley</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/mujer-leyendo.jpg" class="d-block w-100 carousel-img" alt="...">
      <div class="carousel-caption d-none d-md-block hero-quote">
      <div class="quote-wrapper">
        <h2>“Cada libro es un viaje que comienza al pasar la primera página.”</h2>
      </div>
      </div>
    </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Carrusel-->





<!-- Footer -->
  <?php include("php/Footer.php"); ?>
<!-- Footer -->

  
    <!-- jQuery Plugins -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>