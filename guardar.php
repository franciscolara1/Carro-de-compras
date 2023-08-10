<?php 
include('db.php');
if(isset($_POST['guardar'])){
    $nombre_juego = $_POST['nombre'];
    $precio = $_POST['precio'];
    #$imagen = $_POST['imagen']
    
    $query = "INSERT INTO compra(nombre_juego,precio/*,imagen*/) VALUES ('$nombre_juego','$precio'/*,'$imagen' */)";
    $result = mysqli_query($conn,$query);

    if(!$result){
        die("Query failed!");
    }

    $_SESSION['mensaje'] = 'Se agrego el producto al carrito!!';
    $_SESSION['tipo_mensaje'] = 'success';
    header("Location: index.php");
}

?>
