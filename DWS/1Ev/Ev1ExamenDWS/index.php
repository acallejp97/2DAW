<?php
session_start();

define('RAIZ_APLICACION', dirname(__FILE__));
include RAIZ_APLICACION . "/php/conexion/Conexion.php";

function numeroCuadros()
{
    $sqlSelectUltimoCuadro = "SELECT COUNT(*) FROM cuadro";
    $db = Conexion::getInstance();
    $ultimoCuadro = $db->query($sqlSelectUltimoCuadro);
    $cuadro = $ultimoCuadro->fetch();
    return $cuadro[0];
}

function foto()
{
    $sqlSelectFotoCuadro = "SELECT foto_cuadro FROM cuadro WHERE cod_cuadro = " . numeroCuadros();
    $db = Conexion::getInstance();
    $fotoCuadro = $db->query($sqlSelectFotoCuadro);
    $foto = $fotoCuadro->fetch();
    return $foto[0];
}

function nombre()
{
    $sqlSelectNombreCuadro = "SELECT nom_cuadro FROM cuadro WHERE cod_cuadro = " . numeroCuadros();
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
    <link rel="stylesheet" type="text/css" media="screen" href="html/css/main.css" />
  </head>
  <body>
    <header>
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="php/galeria.php">Galeria</a></li>
        <?php if (isset($_SESSION["usuario"])) {?>
          <li><a href="php/cerrarsesion.php">Cerrar Sesion</a></li>
          <li><a href="php/bajas.php">Bajas</a></li>
        <?php } else {?>
        <li><a href="php/iniciarsesion.php">Iniciar Sesion</a></li>
      <?php }?>
      </ul>
    </header>
    <nav><p id="titulo">QUIENES SOMOS</p></nav>
    <br />
    <br />
    <br />
    <p>
      Esta es la pagina web de una galeria de obras de arte, con la que se
      pretende gestionar las obras de arte que se expondrán en ella...
    </p>
    <br />
    <br />

    <h2>Ultimo Cuadro: <?php echo nombre() ?> </h2>
    <br />
    <img src='html/imagenes/<?php echo foto() ?>' />
  </body>
</html>
