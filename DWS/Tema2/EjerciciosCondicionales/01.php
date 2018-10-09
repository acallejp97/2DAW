<?php
$num1 = 500;
$num2 = 125;
$num3 = 125;
echo "Primer numero: $num1 <br>" . "Segundo numero: $num2 <br>" . "Tercer numero: $num3 <br>";

if ($num1 == $num2 && $num1 == $num3) {
    echo "Los tres numeros son iguales";
} elseif ($num1 != $num2 && $num1 != $num3) {
    echo "Dos numeros son iguales";
} else {
    echo "Los tres numeros son distintos";
}
