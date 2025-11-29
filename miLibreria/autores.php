


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Books Store | Autores</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styleautores.css">
  <link rel="stylesheet" href="css/styleheader.css">
  <link rel="stylesheet" href="css/stylefooter.css">
  <link rel="icon" href="assets/img/logo.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: linear-gradient(120deg, #fceabb 0%, #f8b500 100%); min-height: 100vh; margin: 0; font-family: 'Raleway', sans-serif;">
  <?php include("php/header.php"); ?>
  <!-- Banner superior -->
  <section class="autores-banner w-100" style="background: rgba(255,255,255,0.85); border-radius: 0 0 2rem 2rem; box-shadow: 0 4px 24px rgba(99,102,241,0.10); padding: 3rem 1rem 1rem 1rem; text-align: center;">
    <h1 class="fw-bold" style="color: #f8b500; letter-spacing: 2px;">Autores</h1>
    <p style="color: #6366f1; font-size: 1.1rem;">Descubre los escritores destacados de nuestra librería</p>
  </section>
  <main class="container py-4">
    <div class="row g-3" id="autores-container">
      <!-- Tarjetas de autores generadas por JS -->
    </div>
  </main>
  <?php include("php/Footer.php"); ?>
  <script src="js/autores.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
