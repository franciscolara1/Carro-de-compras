<?php include('includes/header.php');?>


<div class="principal">
    <h3 style="text-align:center;padding-top:20px;">Registro de usuario</h3>
    <form action="controlador/agregar.php" method="post">
        <div class="posicion">
            <label for="email"style="position:relative;right:1px;">Nombre: </label>
            <input type="text" name="nombre" id="nombre1"placeholder="Ingrese su nombre">
            <br>
            <label for="contraseña"style="position:relative;right:1px">Correo: </label>
            <input type="email" name="correo" id="correo1"placeholder="Ingrese su correo">
            <br>
            <label for="contraseña"style="position:relative;right:10px;">Contraseña: </label>
            <input type="password" name="contraseña" id="contraseña1"placeholder="Ingrese su contraseña">
            <div class="go" style="color:blueviolet;margin-top:10px">
            <input type="submit" class="btn btn-dark btn-md mb-3"style="margin-left:40px;"name="registrar" value="Registrarse">
            <button class="btn btn-dark"style="position:relative;top:12px;"><a href="login.php"style="text-decoration:none;color:white">Login</a></button>
            </div>
            <?php if(isset($_SESSION['cliente_agregado'])) { ?>
            <div class="alert alert-success alert-dismissible fade show m-4" role="alert">
                <?= $_SESSION['cliente_agregado'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php  session_unset(); } ?>
            
        </div>
    </form>
</div>
<?php include('includes/footer.php');?>