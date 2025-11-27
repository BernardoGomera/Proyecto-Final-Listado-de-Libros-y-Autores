<?php

include ("conexion.php");

class DBGestionLibreria{
    
    private $conexion;

    public function __construct($conexion){
        $this->conexion = $conexion;
    }

        public function getTitulos() {
         
            try {
                $sql = "SELECT * FROM titulos ORDER BY titulo";
                $stmt = $this->conexion->prepare($sql);
                $stmt->execute();
                $titulos = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $titulos;
            } catch (PDOException $e) {
                // Manejar errores de conexión o consulta
                echo "Error al obtener las tiendas: " . $e->getMessage();
                return false;
            }
        }
}
    
