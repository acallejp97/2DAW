<?php
$dividendo = 12;
$divisor = 4;
$cociente = $dividendo / $divisor;
$resto = $dividendo % $divisor;

echo "Dividendo: $dividendo <br> Divisor: $divisor <br> Cociente: $cociente <br> Resto: $resto<br>";

if ($resto == 0) {
    echo "La división es exacta";
} else {
    echo "La división no es exacta";
}
?>