<?php

class Conexion{

    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "carro";

    public function abrirConexion(){
        $conn = mysqli_connect("localhost","root","","carro");    
        return $conn;
    }


}
?>