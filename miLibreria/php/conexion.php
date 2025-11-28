<?php
  try {
    // Forzar conexión por TCP al contenedor MySQL en el host
    // Use root password from MySQL container (set to 'root' when container created)
    $conexion = new PDO('mysql:host=127.0.0.1;port=3306;dbname=db_libreria;charset=utf8mb4', 'libreria', 'lib2025');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    //echo "Conectado correctamente a la base de datos ";
  } catch (PDOException $e) {
    // No lanzar aquí: deje que el consumidor capture el error y use fallback
    error_log('Error en la conexión a la base de datos: ' . $e->getMessage());
    throw $e;
  }
?>