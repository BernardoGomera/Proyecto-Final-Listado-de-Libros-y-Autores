<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mimir's Eye</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/stylecontacto.css">
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
  
<body style="opacity: 75; background-image: url('assets/img/cielo1.jpg'); width: 100%;
height: auto; background-repeat: no-repeat;background-position: center;
background-attachment: fixed; background-size: cover;">>  
<br></br>

<!-- Header-->
   <?php
			include ("php/header.php");
		?>

<!-- SECTION -->
<div class="container">
<br></br>
           <h1>Su opinión es importante</h1>
           <br></br>
			<form action="php/guardar_comentario.php" method="post">
				<div class="form-group">
					<label for="nombre">Su nombre:</label>
					<input name="nombre" type="text" class="form-control" id="nombre" placeholder="Su nombre">
				</div>
        <br></br>
        <div class="form-group">
          <label for="asunto">Asunto:</label>
          <input name="asunto" type="text" class="form-control" id="asunto" placeholder="Asunto">
        </div>
        <br></br>
        <div class="form-group">
          <label for="correo">Correo electrónico:</label>
          <input name="correo" type="email" class="form-control" id="correo" placeholder="ejemplo@correo.com">
        </div>
        <br></br>
				<div class="form-group">
					<label for="comentario">Comentario:</label>
					<textarea name="comentario" class="form-control" id="comentario" rows="6"></textarea>
				</div>
        <br></br>
				<div class="form-group">
					<input name="guardar" class="btn btn-primary" type="submit" value="Enviar">
				</div>
        <br></br>
			</form>
</div>
    <!-- SECTION -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<div class="contenedor_img col-md-auto">
                <img class="img-fluid imagenPrincipallibros" src="./img/dswamin.png" alt="">
            </div>
    </main>
    </div>
    <!-- Footer -->
    <?php include("php/Footer.php") ?>

  
    <!-- jQuery Plugins -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
