<?php

if (isset($_GET['respuesta']))
{
	$respuesta = $_GET['respuesta'];
	switch($respuesta){
		case 'text':
			echo 'Error la respuesta es incorrecta';
			break;
		case 'val':
			echo 'CORRECTO';
			break;
		case 'html':
			echo "Error respuesta incorrecta";
			break;
	}
}