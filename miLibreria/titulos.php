<?php include 'php/conexion.php'?>
<?php include 'php/getTitulos.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beato bookss </title>
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styletitulo.css">
  <link rel="stylesheet" href="css/styleheader.css">
  <link rel="stylesheet" href="ccs/stylefooter.css">
  <link rel="icon" href="css/img/logo.png" type="image/x-icon"> 
<!-- CSS de Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- jQuery (necesario para algunas funciones de Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Popper.js (necesario para algunos componentes de Bootstrap que requieren tooltips y popovers) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</head>

<body style="opacity: 75; background-color:blanchedalmond; width: 100%;
height: auto; background-repeat: no-repeat;background-position: center;
background-attachment: fixed; background-size: cover;">  

<!-- Header-->
<?php include("php/header.php") ?>


<!-- Contenido -->
<section id="titulos">
    <br>
</section>

<section class="page-section about-heading">
    <div class="container">
        <div class="product-item">
            <!-- Container para pantallas grandes -->
            <div class="product-item-title d-flex d-none d-md-block" id= "Pantallas_grandes" style="width : 630px;">
                <div class="bg-faded p-5 d-flex me-auto rounded" style="margin-left : 50px;">
                    <h2 class="section-heading mb-0">
                        <span class="section-heading-lower">Libros Disponibles</span>
                    </h2>
                </div>
            </div>

            <!-- Container para pantallas mobiles -->
            <div class="product-item-title d-flex d-md-none position-relative">
                <div class="bg-faded p-4 d-flex me-auto rounded">
                    <h2 class="section-heading mb-0">
                        <span class="section-heading-lower">Libros Disponibles</span>
                    </h2>
                </div>
            </div>                         
            
            <section class="container rounded cta about-heading-img mb-3 mb-lg-0">    
                <div class="container">
                    <div class="row">
                        <!-- Lista de Libros -->
                        <?php
                                $libreria = new DBGestionLibreria($conexion);
                                $titulo = $libreria->getTitulos();
                                foreach  ($titulo as $registro){ 
                                  //print_r($registro);
                                  print('<p>'.$registro['titulo'].'</p>');
                                 }
                        ?>
            </div>
        </div>
    </div>


    </div>

     <!-- Footer -->
     <footer id= "footer">
      <div class="footer-container text-center background-color: #333">
      <img src="assets/img/logobeato.png" alt="Logo" width="35" height="40" >
        <p><b>Beato books</b></p>
        <h4>Copyright ©2024 - Todos los derechos reservados.</h4>
    </div>
  </footer>
    <!-- jQuery Plugins -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>