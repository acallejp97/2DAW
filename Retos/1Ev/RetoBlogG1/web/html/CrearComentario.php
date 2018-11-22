<?php
session_start();
define('RAIZ_APLICACION', dirname(__FILE__));
include_once RAIZ_APLICACION . '/../php/Controlador/ComentarioControler.php';
include RAIZ_APLICACION . '/../php/Conexion/Conexion.php';
	$id_articulo=$_SESSION["id_articulo"];
	$texto=$_POST["ComentarioPost"];
	$comentarioCont=new ComentarioControler();
	$comentarioCont->guardarregistro($texto, '2018-11-12', $id_articulo, 1);
	$_SESSION["id_articulo"]=$id_articulo;
	header('Location:verPost.php');
?>