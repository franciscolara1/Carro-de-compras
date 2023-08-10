<?php include('db.php');?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TIenda de juegos</title>
    <!--BOOTSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
    crossorigin="anonymous">
    <!--FONT AWESOME -->
    <script src="https://kit.fontawesome.com/65f5b2db8c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link async href="https://fonts.googleapis.com/css?family=Tourney" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
  </head>
<body>
  <nav class="navbar bg-dark">
        <div class="container">
            <a class="titulo"href="index.php"><span class="navbar-brand mb-0 h1 text-white">Tienda de Juegos</span></a>
            <a class="home" href="index.php"><i class="fa-solid fa-house"></i></a>
            <a class="user2"href="login.php"><i class="fa-solid fa-user"></i></a>
        </div>
  </nav>
  <div class="container col-4 carrito"style="margin-top:60px">
    <table class="table">
        <thead>
          <tr>
            <h4 style="text-align:center">Carro de Compras</h1>
          </tr>
            <tr>
                <th>ID</th>
                <th>Juegos</th>
                <th>Precio</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody style="color:black;font-family:Consolas;font-size:17px">
          <?php 

          $query = "SELECT id,nombre_juego,CONCAT(substr(precio,1,2),'.000') AS presio FROM compra";
          $resultado = mysqli_query($conn,$query);

          while($fila = mysqli_fetch_array($resultado)) { ?>
            <tr>
                <td><?php echo $fila['id'];?></td>
                <td><?php echo $fila['nombre_juego']; ?></td>
                <td><?php echo "$".$fila['presio']; ?></td>
                <td><a class="borrar"href="borrar.php?id=<?php echo $fila['id'];?>"><i class="fa-solid fa-trash"></i></a></td>
            </tr>
          <?php }?>
          <?php 
          
          $query = "SELECT CONCAT('$',SUM(precio)) as sumita FROM compra";
          $resultado = mysqli_query($conn,$query);

          while($fila = mysqli_fetch_array($resultado)) { ?>
          <tr>
            <th>Total</th>
            <th></th>
            <th><?php echo $fila['sumita'];?></th>
            <th></th>
          </tr>
          <?php } ?>
        </tbody>
    </table>
  </div>
  <button class="btn btn-outline-success text-black"style="margin-left:42%;margin-top:10px;width:300px;font-weight: bold;"onclick="alerta()">Comprar</button>
  <div class="alert alert-warning alert-dismissible fade show" role="alert" style="display:none;width:600px;margin-left:34%;margin-top:10px" id="alerta">
      <h5>Su compra se realizo correctamente!</h5>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php  include('includes/footer.php'); ?>
