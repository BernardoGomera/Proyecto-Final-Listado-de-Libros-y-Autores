<?php
// Página de autores
require_once 'php/conexion.php';
$sql = "SELECT nombre, apellido, ciudad, pais FROM autores ORDER BY apellido ASC";
$stmt = $pdo->query($sql);
$autores = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Librería Moderna - Autores</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <script src="js/main.js" defer></script>
</head>
<body>
    <header class="bg-primary text-white p-3 mb-4">
        <h1 class="text-center">Librería Moderna</h1>
        <nav class="text-center">
            <a href="index.php" class="btn btn-light">Libros</a>
            <a href="autores.php" class="btn btn-light">Autores</a>
            <a href="contacto.php" class="btn btn-light">Contacto</a>
        </nav>
    </header>
    <main class="container">
        <h2 class="mb-4">Listado de Autores</h2>
        <div class="row">
            <?php foreach ($autores as $autor): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="assets/autor1.jpg" class="card-img-top" alt="Autor" style="height:180px;object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($autor['nombre'] . ' ' . $autor['apellido']); ?></h5>
                        <p class="card-text">Ciudad: <?php echo htmlspecialchars($autor['ciudad']); ?></p>
                        <p class="card-text">País: <?php echo htmlspecialchars($autor['pais']); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </main>
    <footer class="bg-dark text-white text-center p-3 mt-4">
        &copy; <?php echo date('Y'); ?> Librería Moderna
    </footer>
</body>
</html>
