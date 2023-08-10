<?php

require('Conexion.php');

class Juego{

    public function obtenerJuegos(){

        $conectar = new Conexion();
        $conn = $conectar -> abrirConexion();

        $consulta = "select * from juegos";

        $resultado = mysqli_query($conn,$consulta);

        return $resultado;

    }
}
?>