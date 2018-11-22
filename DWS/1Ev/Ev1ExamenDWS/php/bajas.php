<?php session_start();
define('RAIZ_APLICACION', dirname(__FILE__));
include RAIZ_APLICACION . "/conexion/Conexion.php";

function numeroCuadros()
{
    $sqlSelectUltimoCuadro = "SELECT COUNT(*) FROM cuadro";
    $db = Conexion::getInstance();
    $ultimoCuadro = $db->query($sqlSelectUltimoCuadro);
    $cuadro = $ultimoCuadro->fetch();
    return $cuadro[0];
}

function nombre($id)
{
    $sqlSelectNombreCuadro = "SELECT nom_cuadro FROM cuadro WHERE cod_cuadro = " . $id;
    $db = Conexion::getInstance();
    $nombreCuadro = $db->query($sqlSelectNombreCuadro);
    $nombre = $nombreCuadro->fetch();
    return $nombre[0];
}
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
        <?php if (isset($_SESSION["usuario"])) {?>
          <li><a href="cerrarsesion.php">Cerrar Sesion</a></li>
          <li><a href="bajas.php">Bajas</a></li>
        <?php } else {?>
        <li><a href="iniciarsesion.php">Iniciar Sesion</a></li>
      <?php }?>
      </ul>
    </header>
    <nav><p id="titulo">ELIMINAR UN CUADRO</p></nav>
    <form action="conexiones/eliminar.php" method="POST">
    <p>Datos cuadro</p>
    <br />
    <br />
    <p>Cuadros existentes </p> 
    <select name="cuadro">
      <?php
        for ($cuadro = 1; $cuadro <= numeroCuadros(); $cuadro++) {
      ?>
        <option value='<?php echo nombre($cuadro) ?>'><?php echo nombre($cuadro) ?></option>
      <?php }?>
        </select>
        <br />
    <input type="submit" value="Enviar" name="Enviar">
        </form>
  </body>
</html>
