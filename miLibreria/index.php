
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | Books Store</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styleheader.css">
    <link rel="stylesheet" href="css/stylefooter.css">
    <link rel="icon" href="assets/img/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: #f8f9fa url('assets/img/fondoBliblioteca1.jpg') center center/cover no-repeat fixed; min-height: 100vh;">
  <?php include("php/header.php"); ?>
  <div style="height: 70px;"></div>
  <div class="container py-4">
    <div id="carouselExampleCaptions" class="carousel slide shadow-lg rounded-4 overflow-hidden" data-bs-ride="carousel" style="background:transparent; position:relative;">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
      <!-- Botón anterior -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" style="width:60px; height:60px; top:50%; left:10px; transform:translateY(-50%); z-index:10; background:rgba(255,255,255,0.85); border-radius:50%; border:2px solid #e5e7eb; box-shadow:0 2px 8px rgba(99,102,241,0.10); display:flex; justify-content:center; align-items:center;">
        <span class="carousel-control-prev-icon" aria-hidden="true" style="filter:invert(0.7);"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <!-- Botón siguiente -->
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" style="width:60px; height:60px; top:50%; right:10px; transform:translateY(-50%); z-index:10; background:rgba(255,255,255,0.85); border-radius:50%; border:2px solid #e5e7eb; box-shadow:0 2px 8px rgba(99,102,241,0.10); display:flex; justify-content:center; align-items:center; position:absolute;">
        <span class="carousel-control-next-icon" aria-hidden="true" style="filter:invert(0.7);"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    <div class="carousel-inner">
      <div class="carousel-item active" style="position:relative;">
        <div class="d-flex justify-content-center align-items-center" style="height:100%;">
          <img src="assets/img/libro-abierto.avif" class="carousel-img" alt="Libro abierto" style="max-height:650px; width:auto; object-fit:contain; display:block; margin:auto;">
        </div>
        <div style="position:absolute; top:10%; left:50%; transform:translateX(-50%); z-index:2; width:100%; display:flex; justify-content:center;">
          <div style="background:#fff; border-radius:1rem; box-shadow:0 4px 24px rgba(99,102,241,0.10); border:2px solid #e5e7eb; padding:1.5rem 2rem; display:flex; flex-direction:column; justify-content:center; align-items:center; margin:auto; min-width:320px; max-width:520px;">
            <h5 class="fw-bold mb-1" style="color:#f8b500; font-family:'Lora',serif; font-size:1.18rem; text-align:center; margin:0;">“La lectura nos da un lugar adonde ir cuando debemos permanecer donde estamos.”</h5>
            <p class="author mb-0" style="color:#6366f1; font-size:1rem; font-style:italic; text-align:center;">— Mason Cooley</p>
          </div>
        </div>
      </div>
      <div class="carousel-item" style="position:relative;">
        <div class="d-flex justify-content-center align-items-center" style="height:100%;">
          <img src="assets/img/mujer-leyendo.jpg" class="carousel-img" alt="Mujer leyendo" style="max-height:800px; width:auto; object-fit:contain; display:block; margin:auto; box-shadow:0 8px 32px rgba(99,102,241,0.18); border-radius:1.5rem;">
        </div>
        <div style="position:absolute; top:10%; left:50%; transform:translateX(-50%); z-index:2; width:100%; display:flex; justify-content:center;">
          <div style="background:#fff; border-radius:1rem; box-shadow:0 4px 24px rgba(99,102,241,0.10); border:2px solid #e5e7eb; padding:1.5rem 2rem; display:flex; flex-direction:column; justify-content:center; align-items:center; margin:auto; min-width:320px; max-width:520px;">
            <h5 class="fw-bold mb-1" style="color:#f8b500; font-family:'Lora',serif; font-size:1.15rem; text-align:center;">“Cada libro es un viaje que comienza al pasar la primera página.”</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>
    <!-- Fin Carrusel-->
    <!-- Footer -->
    <?php include("php/Footer.php"); ?>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>