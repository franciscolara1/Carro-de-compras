<?php 
include('../db.php');

if(isset($_POST['registrar'])){
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    $query ="INSERT INTO cliente(nombre_cliente,correo_cliente,password_cliente) VALUES ('$nombre','$correo','$contraseña')";
    $resultado = mysqli_query($conn,$query);
    if(!$resultado){
        die("Consulta Fallada!");
    }
    $_SESSION['cliente_agregado'] = 'Su registro a sido exitoso';
    
    header("Location: ../registro.php");
}

?>