<?php
session_start();

define('RAIZ_APLICACION', dirname(__FILE__));
include RAIZ_APLICACION . "/../conexion/Conexion.php";
$nombreCuadro = $_POST["cuadro"];

function foto($nombreCuadro)
{
    $sqlSelectFotoCuadro = "SELECT foto_cuadro FROM cuadro WHERE nom_cuadro LIKE '" . $nombreCuadro . "';";
    $db = Conexion::getInstance();
    $fotoCuadro = $db->query($sqlSelectFotoCuadro);
    $foto = $fotoCuadro->fetch();
    return $foto[0];
}

function autor($nombreCuadro)
{
    $sqlSelectNumeroAutor = "SELECT autor FROM cuadro WHERE nom_cuadro LIKE '" . $nombreCuadro . "';";
    $db = Conexion::getInstance();
    $numeroAutor = $db->query($sqlSelectNumeroAutor);
    $idAutor = $numeroAutor->fetch();
    $sqlSelectNombreAutor = "SELECT nom_autor FROM autor WHERE cod_autor = " . $idAutor[0];
    $nombreAutor = $db->query($sqlSelectNombreAutor);
    $autor = $nombreAutor->fetch();
    return $autor[0];
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Examen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="../../html/css/main.css" />
  </head>
  <body>
  <header>
      <ul>
        <li><a href="../../index.php">Inicio</a></li>
        <li><a href="../galeria.php">Galeria</a></li>
        <?php if (isset($_SESSION["usuario"])) {?>
          <li><a href="../cerrarsesion.php">Cerrar Sesion</a></li>
          <li><a href="../bajas.php">Bajas</a></li>
        <?php } else {?>
        <li><a href="../iniciarsesion.php">Iniciar Sesion</a></li>
      <?php }?>
      </ul>
    </header>
    <nav><p id="titulo">BAJA CUADRO</p></nav>
    <form action="eliminando.php" method="POST">
    <div class="imagen">
        <img src='../../html/imagenes/<?php echo foto($nombreCuadro) ?>'>
        <div>
            <p strong><?php echo $nombreCuadro ?></p><br />
            <input type="hidden" value="<?php echo $nombreCuadro ?>" name="elCuadro">
            <a>Autor: <?php echo autor($nombreCuadro) ?></a>
        </div>
    </div>
    <input type="submit" value="Confirmar">
    <input type="button" value="Deshacer" onclick="window.history.go(-1);";>
        </form>



  </body>
</html>