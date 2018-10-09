<?php
$nombre = $_POST["nombre"];
echo "Hola $nombre tienes ";
$edad = $_POST["edad"];
echo $edad . " años, su sexo es ";
$sexo = $_POST["sexo"];
if ($sexo == "H") {
    $sexo = "masculino";
} else {
    $sexo = "femenino";
}
echo $sexo . "y posee ";
$extras = $_POST["extras"];
foreach ($extras as $extra) {
    echo ("un $extra,\n");
}
$actualizar = $_REQUEST["actualizar"];
if ($actualizar) {
    echo ("Se han actualizado los datos");
}
