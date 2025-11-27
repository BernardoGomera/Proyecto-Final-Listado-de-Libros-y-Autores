<?php
require_once 'php/conexion.php';
$mensaje = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['correo'] ?? '';
    $nombre = $_POST['nombre'] ?? '';
    $asunto = $_POST['asunto'] ?? '';
    $comentario = $_POST['comentario'] ?? '';
    $fecha = date('Y-m-d H:i:s');
    if ($correo && $nombre && $asunto && $comentario) {
        $sql = "INSERT INTO contacto (fecha, correo, nombre, asunto, comentario) VALUES (?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        if ($stmt->execute([$fecha, $correo, $nombre, $asunto, $comentario])) {
            $mensaje = '¡Gracias por contactarnos!';
        } else {
            $mensaje = 'Error al enviar el mensaje.';
        }
    } else {
        $mensaje = 'Por favor, complete todos los campos.';
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto - Librería Moderna</title>
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
        <h2 class="mb-4">Formulario de Contacto</h2>
        <?php if ($mensaje): ?>
            <div class="alert alert-info"><?php echo $mensaje; ?></div>
        <?php endif; ?>
        <form method="post" class="row g-3">
            <div class="col-md-6">
                <label for="correo" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="correo" name="correo" required>
            </div>
            <div class="col-md-6">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="col-12">
                <label for="asunto" class="form-label">Asunto</label>
                <input type="text" class="form-control" id="asunto" name="asunto" required>
            </div>
            <div class="col-12">
                <label for="comentario" class="form-label">Comentario</label>
                <textarea class="form-control" id="comentario" name="comentario" rows="4" required></textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </main>
    <footer class="bg-dark text-white text-center p-3 mt-4">
        &copy; <?php echo date('Y'); ?> Librería Moderna
    </footer>
</body>
</html>
