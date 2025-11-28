<?php

// Manejo seguro del envío
try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header('Location: ../contacto.php');
        exit;
    }

    // Leer los datos del formulario antes de intentar la conexión
    $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
    $asunto = isset($_POST['asunto']) ? trim($_POST['asunto']) : '';
    $comentario = isset($_POST['comentario']) ? trim($_POST['comentario']) : '';
    $correo = isset($_POST['correo']) ? trim($_POST['correo']) : '';

    require_once 'conexion.php';

    // Buscar por asunto en la tabla `contacto` (nombre de tabla del volcado SQL)
    $queryComentario = "SELECT comentario FROM contacto WHERE asunto = :asunto";
    $stmtComentario = $conexion->prepare($queryComentario);
    $stmtComentario->bindParam(':asunto', $asunto);
    $stmtComentario->execute();
    $comentarioExistente = $stmtComentario->fetch(PDO::FETCH_ASSOC);

    if ($comentarioExistente) {
        // Actualizar concatenando el nuevo comentario correctamente usando parámetro
        $queryActualizarComentario = "UPDATE contacto SET comentario = CONCAT(comentario, '\n\nNuevo Comentario: ', :comentario) WHERE asunto = :asunto";
        $stmtActualizar = $conexion->prepare($queryActualizarComentario);
        $stmtActualizar->bindParam(':comentario', $comentario);
        $stmtActualizar->bindParam(':asunto', $asunto);
        $stmtActualizar->execute();

        echo "<script>alert('Comentario enviado con éxito.'); window.location='../contacto.php';</script>";
        exit;
    } else {
        // Insertar nuevo registro en la tabla `contacto`
        $queryInsertarComentario = "INSERT INTO contacto (fecha, correo, nombre, asunto, comentario) VALUES (NOW(), :correo, :nombre, :asunto, :comentario)";
        $stmtInsertar = $conexion->prepare($queryInsertarComentario);
        $stmtInsertar->bindParam(':correo', $correo);
        $stmtInsertar->bindParam(':nombre', $nombre);
        $stmtInsertar->bindParam(':asunto', $asunto);
        $stmtInsertar->bindParam(':comentario', $comentario);
        $stmtInsertar->execute();

        echo "<script>alert('Comentario enviado con éxito.'); window.location='../contacto.php';</script>";
        exit;
    }
} catch (PDOException $e) {
    // Si hay un error con la base de datos, usar un fallback local (archivo) y notificar éxito
    $msg = htmlspecialchars($e->getMessage(), ENT_QUOTES);
    $fallbackDir = __DIR__ . '/../app/data';
    if (!is_dir($fallbackDir)) {
        @mkdir($fallbackDir, 0755, true);
    }
    $fallbackFile = $fallbackDir . '/contacto_fallback.txt';
    $entry = [
        'fecha' => date('Y-m-d H:i:s'),
        'correo' => $correo ?? '',
        'nombre' => $nombre ?? '',
        'asunto' => $asunto ?? '',
        'comentario' => $comentario ?? '',
        'error' => $msg
    ];
    $line = json_encode($entry, JSON_UNESCAPED_UNICODE) . PHP_EOL;
    $written = @file_put_contents($fallbackFile, $line, FILE_APPEND | LOCK_EX);
    if ($written === false) {
        // Si tampoco se puede escribir en disco, mostrar error genérico
        echo "<script>alert('No fue posible enviar el formulario en este momento. Por favor intenta más tarde.'); window.location='../contacto.php';</script>";
        exit;
    }

    // Informar al usuario que su mensaje fue recibido (guardado en fallback)
    echo "<script>alert('Tu mensaje fue recibido. Si hubo un problema técnico, se guardó localmente y será revisado.'); window.location='../contacto.php';</script>";
    exit;
}