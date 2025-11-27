<?php

require_once 'conexion.php';

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$comentario = $_POST['comentario'];

// Consulta para insertar o actualizar el comentario
$queryComentario = "SELECT mensaje FROM contactos WHERE asunto = :asunto";
$stmtComentario = $conexion->prepare($queryComentario);
$stmtComentario->bindParam(':asunto', $asunto);
$stmtComentario->execute();
$comentarioExistente = $stmtComentario->fetch(PDO::FETCH_ASSOC);

if ($comentarioExistente) {
    // Si existe un comentario, actualizarlo
    $queryActualizarComentario = "UPDATE contactos SET mensaje = CONCAT(mensaje, '\n\nNuevo Comentario: :comentario') WHERE asunto = :asunto";
    $stmtActualizar = $conexion->prepare($queryActualizarComentario);
    $stmtActualizar->bindParam(':comentario', $comentario);
    $stmtActualizar->bindParam(':asunto', $asunto);
    $stmtActualizar->execute();
    echo '
        <script>
            alert("Comentario enviado con éxito.");
            window.location="../menuprincipal.php";
        </script>
    ';
} else {
    // Si no existe un comentario, insertarlo
    $queryInsertarComentario = "INSERT INTO contactos (nombre, asunto, mensaje) VALUES (:nombre, :asunto, :mensaje)";
    $stmtInsertar = $conexion->prepare($queryInsertarComentario);
    $stmtInsertar->bindParam(':nombre', $nombre);
    $stmtInsertar->bindParam(':asunto', $asunto);
    $stmtInsertar->bindParam(':mensaje', $comentario);
    $stmtInsertar->execute();
    // Redirigir al usuario al menú principal
    header("Location:../menuprincipal.php");
    exit;
}