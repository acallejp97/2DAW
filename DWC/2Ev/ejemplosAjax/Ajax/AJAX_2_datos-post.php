<?php 
	
	if (isset($_POST["nombre"]) && isset($_POST["apellidos"])){

		$nombre=$_POST["nombre"];
		$apellidos=$_POST["apellidos"];
		echo "Nombre:  $nombre <br> Apellidos: $apellidos";
	}
	else
	{
		echo "ERROR variables no encontradas";
	}
?>