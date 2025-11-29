
<?php include 'php/conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tiendas | Books Store</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/tiendas_moderno.css">
  <link rel="stylesheet" href="css/styleheader.css">
  <link rel="stylesheet" href="css/stylefooter.css">
  <link rel="icon" href="assets/img/logo.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <?php include("php/header.php"); ?>

  <section class="py-5 tiendas-fondo">
    <div class="container">
      <div class="row mb-4">
        <div class="col text-center">
          <img src="assets/img/logo.png" alt="Logo" width="50" class="mb-2">
          <h1 class="display-5 fw-bold titulo-tiendas">Nuestras Tiendas</h1>
          <p class="lead text-muted">Descubre todos los rincones donde la lectura cobra vida. ¡Visítanos y vive la experiencia Books Store!</p>
        </div>
      </div>
      <div class="row g-4 justify-content-center">
        <?php 
          include ("php/getTiendas.php");
          $libreria = new DBGestionLibreria($conexion);
          $tiendas = $libreria->getTiendas();
          foreach ($tiendas as $registro) {
            echo '<div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card shadow tienda-card h-100">
                      <div class="card-body d-flex flex-column justify-content-between">
                        <div class="mb-3 text-center">
                          <i class="fa fa-store fa-2x text-primary mb-2"></i>
                          <h5 class="card-title fw-bold">'.htmlspecialchars($registro['nombre_tienda']).'</h5>
                        </div>
                        <ul class="list-unstyled mb-0 text-center">
                          <li><i class="fa fa-map-marker-alt text-danger"></i> '.htmlspecialchars($registro['ciudad']).', '.htmlspecialchars($registro['pais']).'</li>
                        </ul>
                      </div>
                    </div>
                  </div>';
          }
        ?>
      </div>
    </div>
  </section>

  <?php include("php/Footer.php"); ?>

  <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

