<?php
$email='';
$contraseña='';

$email=$_POST['email'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['email']=$email;

require('../modelo/Cliente.php');



class ClienteController{


    public function iniciar($mail,$clave)
    {
        $cliente = new Cliente();
        $sesion = $cliente->iniciarSesion($mail,$clave);
        if($fila = mysqli_fetch_array($sesion))
        {
            header("location:../index.php?user=".$fila['nombre_cliente']);
            $_SESSION['nombre_cliente'] = "Hola, ".$fila['nombre_cliente'].".";
        }
        else
        {
            
            header("location:../login.php?user=error");
        }
        
    }
}

$validar = new ClienteController;
$validar->iniciar($email, $contraseña);

?>