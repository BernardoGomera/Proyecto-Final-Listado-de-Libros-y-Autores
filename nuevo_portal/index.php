<?php
// Página principal: Listado de libros
require_once 'php/conexion.php';
$sql = "SELECT t.titulo, t.precio, t.fecha_pub, p.nombre_pub FROM titulos t JOIN publicadores p ON t.id_pub = p.id_pub ORDER BY t.titulo ASC";
$stmt = $pdo->query($sql);
$libros = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Librería Moderna - Libros</title>
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
        <h2 class="mb-4">Listado de Libros</h2>
        <div class="row">
            <?php foreach ($libros as $libro): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="assets/libro1.jpg" class="card-img-top" alt="Libro" style="height:180px;object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($libro['titulo']); ?></h5>
                        <p class="card-text">Editorial: <?php echo htmlspecialchars($libro['nombre_pub']); ?></p>
                        <p class="card-text">Precio: $<?php echo number_format($libro['precio'], 2); ?></p>
                        <p class="card-text">Publicado: <?php echo date('d/m/Y', strtotime($libro['fecha_pub'])); ?></p>
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
