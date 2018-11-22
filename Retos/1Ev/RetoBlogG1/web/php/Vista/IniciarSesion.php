<?php
session_start();

define('RAIZ_APLICACION', dirname(__FILE__));

include_once RAIZ_APLICACION . '../Controlador/usuarioDTO.php';
include_once RAIZ_APLICACION . '../Controlador/UsuarioControler.php';

$usuarioTemp=[];
$usuario = $_POST["usuario"];
$pwd = $_POST["password"];
$usuarioDto = new usuarioDTO();
$usuarioControl = new UsuarioController();
$usuarioDto = $usuarioControl->login($usuario, $pwd);
if(isset($usuarioDto)){
	$usuario=["IdUsuario"=>$usuarioDto->getIdUsuario(),
	          "nombre"=>$usuarioDto->getnombre(),
			  "password"=>$usuarioDto->getPwd(),
			  "email"=>$usuarioDto->getEmail(),
			  "permisos"=>$usuarioDto->getPermisos()
			];
}
else
{
	$usuarioTemp="No existe usuario";
}
array_push($usuarioTemp,$usuario);
$_SESSION["usuario"] = $usuarioTemp;
header("Location: C:\wamp64\www\RetoBlogG1\html\index1.php");
