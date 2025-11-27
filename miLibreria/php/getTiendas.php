<?php

include ("conexion.php");
class DBGestionLibreria{
    
    private $conexion;

    public function __construct($conexion){
        $this->conexion = $conexion;
    }

    public function getTiendas(){
        try {
            // Consulta SQL para obtener las tiendas
            $sql = "SELECT nombre_tienda, ciudad, pais FROM tiendas";
            
            // Preparar y ejecutar la consulta
            $stmt = $this->conexion->prepare($sql);
            $stmt->execute();
            
            // Obtener y devolver los resultados de la consulta
            $tiendas = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $tiendas;
        } catch (PDOException $e) {
            // Manejar errores de conexión o consulta
            echo "Error al obtener las tiendas: " . $e->getMessage();
            return false;
        }
    }
}


