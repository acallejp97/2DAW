<?php

$ciudades = array('Madrid', 'Barcelona', 'Londres', 'New York' , 'Los Angeles', 'Chicago' );

for ($i=0; $i <= 5 ; $i++) { 
	echo "La ciudad con el indice " . $i . " tiene el nombre ". $ciudades[$i] . "<br>";
}
echo "Final de la ejecución";

?>