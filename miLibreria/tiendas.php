<?php include 'php/conexion.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mimir's Eye</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styletiendas.css">
  <link rel="stylesheet" href="css/styleheader.css">
  <link rel="stylesheet" href="css/stylefooter.css">
  <link rel="icon" href="assets/img/logo.png" type="image/x-icon">
<!-- CSS de Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- jQuery (necesario para algunas funciones de Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Popper.js (necesario para algunos componentes de Bootstrap que requieren tooltips y popovers) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</head>
  
<body style="opacity: 75; background-color:#d1bdbd; margin: 0; z-index: 0;height: auto;width: 100%;">  
<br></br>

<!-- Header-->
   <?php
			include ("php/header.php");
		?>

<!-- Tiendas Section -->
<section id="tiendas-section" class="py-5">
  <div class="container">
    <div id="tiendas-container" class="row" style="background-attachment: fixed; width: 100%;
height: auto; background-repeat: no-repeat;background-position: center"></div>
    <h2>¡Visita nuestras tiendas!</h2><br/>

    <p class="lead mb-5"></p>
    <?php 
     include ("php/getTiendas.php");
       $libreria = new DBGestionLibreria($conexion);
       $tiendas = $libreria->getTiendas();
       //var_dump($tiendas);
       foreach  ($tiendas as $registro){ 
        //print_r($registro);
        print('<p>'.$registro['nombre_tienda'].', '.$registro['ciudad'].', '.$registro['pais'].'</p>');
       }?>
  </div>
</section>
<!-- /Autores Section -->

    <!-- Footer -->
    <?php include("php/Footer.php") ?>

  
<!-- jQuery Plugins -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/main.js"></script>
<script src="js/autores.js"></script>

</body>
</html>

