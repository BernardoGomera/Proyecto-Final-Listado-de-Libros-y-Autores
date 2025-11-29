<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/contacto_moderno.css">
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
  
<body>
<br></br>

<!-- Header-->
   <?php
			include ("php/header.php");
		?>

<!-- SECTION -->
<section class="contacto-section">
  <img src="assets/img/logo.png" alt="Contacto" class="contacto-icono">
  <h1>Contáctanos</h1>
  <form action="php/guardar_comentario.php" method="post">
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Tu nombre" required>
    </div>
    <div class="mb-3">
      <label for="asunto" class="form-label">Asunto</label>
      <input name="asunto" type="text" class="form-control" id="asunto" placeholder="Asunto" required>
    </div>
    <div class="mb-3">
      <label for="correo" class="form-label">Correo electrónico</label>
      <input name="correo" type="email" class="form-control" id="correo" placeholder="ejemplo@correo.com" required>
    </div>
    <div class="mb-3">
      <label for="comentario" class="form-label">Comentario</label>
      <textarea name="comentario" class="form-control" id="comentario" rows="5" placeholder="Escribe tu mensaje aquí..." required></textarea>
    </div>
    <div class="d-grid gap-2">
      <button type="submit" name="guardar" class="btn btn-primary">Enviar</button>
    </div>
  </form>
</section>
    <!-- SECTION -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<div class="contenedor_img col-md-auto">
<!-- Imagen decorativa eliminada para diseño más limpio -->
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
