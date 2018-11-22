<?php
$num=2;
$frase="";
switch ($num) {
	case 1:
	$frase="Lunes";
	break;
	case 2:
	$frase="Martes";
	break;
	case 3:
	$frase="Miercoles";
	break;
	case 4:
	$frase="Jueves";
	break;
	case 5:
	$frase="Viernes";
	break;
	case 6:
	$frase="Sabado";
	break;
	case 7:
	$frase="Domingo";
	default:
	break;
}
echo $num . "=>" . $frase;
?>