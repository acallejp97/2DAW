<?php
$tamanio=rand(1,10);

for ($i=0; $i < $tamanio; $i++) { 

	$elArray[]=rand(1,10);

}
if ($tamanio == 2){
	$res = intval($elArray[count($elArray)-2])+intval($elArray[count($elArray)-1]);

}elseif ($tamanio==1){
	$res = intval($elArray[count($elArray)-1]);

}else{
	$res = intval($elArray[count($elArray)-3]) + intval($elArray[count($elArray)-2])+intval($elArray[count($elArray)-1]);

}
echo $res . '<br/>';

if($res>=1 && $res<=10){
	echo 'Entre 1 y 10';

}elseif($res>=10 && $res<=20){
	echo 'Entre 10 y 20';

}elseif ($res>20) {
	echo 'Mayor que 20';

}else{
	echo 'Negativo';

}

?>