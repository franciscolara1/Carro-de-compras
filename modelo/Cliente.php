<?php

require('Conexion.php');

class Cliente {

public function iniciarSesion($email,$contraseña)
{
    $conectar = new Conexion();
    $conn = $conectar->abrirConexion();
     $consulta = "SELECT * FROM cliente c WHERE c.correo_cliente = '".$email."' and c.password_cliente ='".$contraseña."' " ;

    $resultado = mysqli_query($conn,$consulta);

    return $resultado;

    }
    

}

?>