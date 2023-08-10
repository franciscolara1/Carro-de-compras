<?php include("db.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Game Store</title>
    <link rel="icon" type="image/jpg" href="img/logos/control.png" style="border-radius:100px">
    <!--BOOTSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
    crossorigin="anonymous">
    <!--FONT AWESOME -->
    <script src="https://kit.fontawesome.com/65f5b2db8c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="skeleton.css">
    <link async href="https://fonts.googleapis.com/css?family=Tourney" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
  </head>
  <body>
   <nav class="navbar navbar-expand-md bg-dark" id="nav2">
      <section>
         <a href="#">Tendencias</a>
         <a href="#">Reservas</a>
         <a href="#">Próximos Lanzamientos</a>
         <a href="#">Soporte</a>
      </section>
   </nav>
  <nav class="navbar navbar-expand-md sticky-top bg-dark" id="nav">
      <div class="container col-sm-12 col-lg-12 col-md-12" style="flex-direction:row; color:white;text-align:right;">
      <img src="img/Logos/control.png" alt="" id="logo">
         <h1 class="t-stroke t-shadow" id="name-logo">Game House</h1>
         <a class="carro"href="carro.php"><i class="fa-solid fa-cart-shopping"></i></a>
         <div class="cuenta">
               <?php 
               $query = "SELECT COUNT(nombre_juego) as cuenta FROM compra";
               $resultado = mysqli_query($conn,$query);

               while($fila = mysqli_fetch_array($resultado)) { ?>
            <h4>
               <?php echo $fila['cuenta']; ?>
            </h4>
            <?php } ?>
         </div>
      </div>
  </nav>
<script src="js/cambio.js"></script>