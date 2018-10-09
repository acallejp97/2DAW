<?php
session_start();
$_SESSION["user"] = $_REQUEST['user'];
$_SESSION["pass"] = $_REQUEST['pass'];
$usuario = "pepe";
$contrasena = "1111";
//echo $_SESSION["user"]." - ".$_SESSION["pass"];
if ($_SESSION["user"] != $usuario || $_SESSION["pass"] != $contrasena) {
    echo "Has introducido mal el usuario o contrase&ntilde;a";
} else {
    echo "Enhorabuena estas dentro!";
}
