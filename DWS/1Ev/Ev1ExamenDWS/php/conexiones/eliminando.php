<?php
session_start();

define('RAIZ_APLICACION', dirname(__FILE__));
include RAIZ_APLICACION . "/../conexion/Conexion.php";

$nombreCuadro = $_POST["elCuadro"];

$sqlBorrarCuadro = "DELETE FROM cuadro WHERE nom_cuadro LIKE '" . $nombreCuadro . "';";
$db = Conexion::getInstance();
$eliminar = $db->query($sqlBorrarCuadro);
echo "<script>alert('Cuadro eliminado');location=\"../bajas.php\"; location.reload();</script>";
