<?php
$usuario=isset($_GET['user']);
?>
<?php include("includes/header.php"); ?>
<!-- FILTRO -->
<section class="porta">
    <section class="filtro">
            <a href="#">Acción</a>   
            <a href="#">RPG</a>
            <a href="#">Battle Royal</a>
            <a href="#">Survival Horror</a>
            <a href="#">Deportes</a>
            <a href="#">Lucha</a>
            <a href="#">FPS</a>
    </section>
<!-- CARROUSEL  -->
    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/resident evil 4 remake.jpg" class="d-block" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Resident Evil 4</h5>
                        <h3><span>-30%</span>34.000$</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/silent hill 2.jpg" class="d-block" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Silent hill 2 Remake </h5>
                        <h3><span>-10%</span>44.000$</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/fifa 2023.jpg" class="d-block" alt="...">
                    <div class="carousel-caption d-none d-md-block"style="color:black;">
                        <h5>Fifa 234</h5>
                        <h3><span>-10%</span>26.000$</h3>
                    </div>
                </div>
            </div>
    </div>
</section>
<div class="container">
    <!-- NOTIFICACIÓN DE COMPRA -->
        <?php if(isset($_SESSION['mensaje'])) { ?>
            <div class="alert alert-<?= $_SESSION['tipo_mensaje']; ?> alert-dismissible fade show m-4" role="alert">
                <?= $_SESSION['mensaje'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php session_unset(); } ?>
    <!-- JUEGOS -->
    <div class="row">
        <!-- SELECT PHP-->
        <?php
            require('controlador/controller.php');
            $resultado = new JuegoController();
            $query = $resultado->getJuegos();
            //recorrer arreglo y crear las cards según la cantidad de juegos encontrados
            while($fila = mysqli_fetch_array($query))
            {

        ?>
        <div class="card" style="width:20rem;">
        <img src="<?php echo $fila['img'] ?>" class="card-img-top carta" alt="...">
        <form action="guardar.php" method="POST">
            <div class="card-body">
                <input type="text" value="<?php echo $fila['nombre'] ?>" name="nombre" class="d-none">
                <input type="number" value=<?php echo $fila['precio'] ?> name="precio" class="d-none">
                <h5 class="card-title"><?php echo $fila['nombre'] ?></h5>
                <h5 class="card-text">$<?php echo $fila['precio']?></h5>
                <button type="submit" class="btn btn-success btn-md mb-3"name="guardar">Agregar</button>
            </div>
        </form>
        </div>
        <?php 
        }
        ?>
    </div>
</div>
<?php include("includes/footer.php"); ?>