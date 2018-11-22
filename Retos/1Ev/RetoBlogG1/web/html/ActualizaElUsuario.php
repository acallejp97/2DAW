<?php
session_start();
include_once RAIZ_APLICACION . '/../php/Controlador/ArticuloControler.php';

$titulo=$_SESSION["titulo"];
$texto=$_SESSION["texto"];
$fecha=$_SESSION["fecha"];
if(isset($_SESSION["publicado"])){
	$publicado=true;
}
else
{
	$publicado=true;
}
$articuloCont=new ArticuloControler();
$actualizado=$articuloCont->actualizarArticulo($idArticulo, $fecha, $texto, $valoracion, $publicado, $titulo);
$_SESSION["actualizado"]=$actualizado;
header("Location: index1.php");
?>