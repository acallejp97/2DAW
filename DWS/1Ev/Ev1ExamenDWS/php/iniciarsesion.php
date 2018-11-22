<?php session_start();?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Examen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="../html/css/main.css" />
  </head>
  <body>
  <header>
      <ul>
        <li><a href="../index.php">Inicio</a></li>
        <li><a href="galeria.php">Galeria</a></li>
        <?php if (isset($_SESSION["usuario"])) {?>
          <li><a href="cerrarsesion.php">Cerrar Sesion</a></li>
          <li><a href="bajas.php">Bajas</a></li>
        <?php } else {?>
        <li><a href="conexiones/login.php">Iniciar Sesion</a></li>
      <?php }?>
      </ul>
    </header>
    <nav><p id="titulo">INICIAR SESION</p></nav>
    <br />
    <br />
    <form action="conexiones/login.php" method="POST">
    <p>Datos usuario</p>
    <br />
    <br />
    <p>Usuario </p> <input type="text" name="usuario">
    <p>Constraseña </p> <input type="password" name="passwd">
    <input type="submit" value="Iniciar Sesion" name="Inciar Sesion">
        </form>
  </body>
</html>
