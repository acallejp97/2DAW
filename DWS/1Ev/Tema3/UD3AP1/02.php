<?php
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$coche = $_POST["select"];
$animales = $_POST["checkbox"];
$hombre = $_POST["radio"];

echo "Te llamas $nombre $apellido, te gusta la marca $coche, los animales ";
foreach ($animales as $animal) {
    echo "$animal, ";
}

if ($hombre) {
   echo "y eres hombre";
} else {
    echo "y no eres hombre";
}
?>
