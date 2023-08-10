<?php 
include('db.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM compra WHERE id = $id";
    $result = mysqli_query($conn,$query);

    if(!$result){
        die('No se pudo borrar!');
    }
    header("Location: carro.php");
}
?>