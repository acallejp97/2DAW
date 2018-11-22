<?php session_start();

define('RAIZ_APLICACION', dirname(__FILE__));

?>

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
        <?php if (isset($_SESSION["usuario"])){?>
          <li><a href="cerrarsesion.php">Cerrar Sesion</a></li>
          <li><a href="bajas.php">Bajas</a></li>
        <?php }else{?>
        <li><a href="iniciarsesion.php">Iniciar Sesion</a></li>
      <?php } ?>
      </ul>
    </header>
    <nav><p id="titulo">NUESTRAS OBRAS DE ARTE</p></nav>
    <div  class="galeria">
<?php 
include RAIZ_APLICACION . "/conexiones/sacarCuadros.php"

?>
    </div>
    
  </body>
</html>
