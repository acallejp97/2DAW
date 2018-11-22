<?php
$variable = 5;
$numero = array('uno','dos','tres','cuatro','cinco','seis','siete','ocho','nueve','diez');

if($variable<=10 && $variable>=0){

	echo('El numero es '.$numero[$variable-1]);

}else{
	echo('El numero no esta entre el 1 y 10');
}
?>