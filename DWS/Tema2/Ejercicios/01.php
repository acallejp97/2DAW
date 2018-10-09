<?php
$valor = 2;

for ($i=0; $i <= 10; $i++) { 
	echo ($valor . ' * ' . $i . ' = ' . ($valor * $i). '<br/>');
}

$i = 0;
while ($i <= 10) {
	echo ($valor . ' * ' . $i . ' = ' . ($valor * $i). '<br/>');
	$i++;
}

$i=0;
do {
	echo ($valor . ' * ' . $i . ' = ' . ($valor * $i) . '<br/>');
	$i++;
} while ($i<=10);
?>