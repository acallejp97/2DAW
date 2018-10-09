<?php
$num=69;
$frase="";
if ($num<=60 && $num>=20){
	$num1=substr($num, -2,1);
	$num2=substr($num, -1);

	switch($num1){
		case 2:
		$frase = "Veinte";
		break;
		case 3:
		$frase = "Treinta";
		break;
		case 4:
		$frase = "Cuarenta";
		break;
		case 5:
		$frase = "Cincuenta";
		break;
		default:;
	}

	if ($num2 !=0){
		$frase = $frase . " y ";
		switch($num2){
			case 1:
			$frase = $frase .  "uno";
			break;
			case 2:
			$frase = $frase .  "dos";
			break;
			case 3:
			$frase = $frase .  "tres";
			break;
			case 4:
			$frase = $frase .  "cuatro";
			break;
			case 5:
			$frase = $frase .  "cinco";
			break;
			case 6:
			$frase = $frase .  "seis";
			break;
			case 7:
			$frase = $frase .  "siete";
			break;
			case 8:
			$frase = $frase .  "ocho";
			break;
			case 9:
			$frase = $frase .  "nueve";
			break;
			default:;
		}		
	}
}
echo $frase;

?>