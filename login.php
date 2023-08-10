<?php
$usuario=isset($_GET['user']);
?>
<?php include('includes/header.php'); ?>
<div class="principal">
    <h3 style="text-align:center;padding-top:20px;">Ingresa a tú cuenta</h3>
    <form action="controlador/validar.php" method="post">
        <div class="posicion">
            <label for="email">Correo: </label>
            <input type="email" name="email" id="email"placeholder="Ingrese su correo"style="width:300px;">
            <br>
            <label for="contraseña">Contraseña: </label>
            <input type="password" name="contraseña" id="contraseña"placeholder="Ingrese su contraseña">
            <br>
            <div class="go" style="color:blueviolet;margin-top:10px">
            <input type="submit" class="btn btn-dark btn-md mb-3" value="Ingresar">
            </div>
            <br>
            <a href="registro.php">¿No tiene una cuenta, registrese?</a>
            <div class="color">
            <?php
            if($usuario == 'error'){?>
            <div style="color:red;text-align:center;margin-right:80px;font-size:20px;"><label>Nombre de usuario o contraseña incorrecta</label></div>
            <?php
            }
            ?> 
            </div>
        </div>
    </form>
</div>
<?php include('includes/footer.php'); ?>