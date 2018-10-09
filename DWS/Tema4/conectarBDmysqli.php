<?php
// $server = "localhost";
// $user = "root";
// $passwd = "";
// $database = "dwes";
// $tablename = "familia";

include 'conexionDB.php';

$mysqli = new mysqli($server, $user, $passwd, $database);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//Codigo para probar si funciona el codigo, no es necesario ponerlo en un programa
else {
    echo "Conectado a $database";
}



