<?php 
session_start();

define('RAIZ_APLICACION', dirname(__FILE__));
include_once RAIZ_APLICACION . '/../php/Controlador/ArticuloControler.php';

$articuloCont=new ArticuloControler();
$idArticulo=$_GET["did"];
$articuloCont->borrarArticulo($idArticulo);
$message = "Post eliminado";
echo "<script type='text/javascript'>alert('$message');</script>";
header('Location: index1.php');
?>