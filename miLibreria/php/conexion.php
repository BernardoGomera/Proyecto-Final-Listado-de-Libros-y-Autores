<?php
  try {
    $conexion = new PDO('mysql:host=localhost;dbname=db_libreria', 'root', '');
    //echo "Conectado correctamente a la base de datos ";
  } catch (PDOException $e) {
    //echo "Error en la conexión a la base de datos: ". $e->getMessage();
  }
?>