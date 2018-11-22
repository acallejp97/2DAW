<?php
include 'DDBBparameters.php';

$conexion = iniciarConexion();

$sentencia = "INSERT INTO $tablename (cod, nombre) VALUES('COMP', 'Componentes')";

$resultados = ejecutarSentencia($conexion, $sentencia);

/**
 * Aqui imprimimos los datos en caso de que la sentencia sea un SELECT
 */
function imprimirDatos($resultados)
{
    while ($row = $resultados->fetch()) {
        echo "Nombre: {$row["cod"]} <br>";
        echo "Ciudad: {$row["nombre"]} <br><br>";
    }
}

/**
 *Aqui ejecutamos la conexion y la sentencia
 *Devolvemos el nmero de columnas en caso de que se haya hecho un INSERT, UPDATE, DELETE, DROP...
 *en caso de que se haya ejecutado un select se devuelven los datos
 */
function ejecutarSentencia($conexion, $sentencia)
{
    try {
        $query = $conexion->prepare($sentencia);
        $query->execute();
        return $query;
    } catch (PDOException $e) {
        print "ERROR!: " . $e->$getMessage() . "<br/>";
        die();
    }
}

/**
 * Aqui iniciamos la conexion, los parametros los cambiamos en DDBBparameters.php
 */
function iniciarConexion()
{
    include 'DDBBparameters.php';

    try {
        $conexion = new PDO('mysql:host=' . $server . ';dbname=' . $database, $user, $passwd);
        return $conexion;
    } catch (PDOException $e) {
        print "ERROR!: " . $e->$getMessage() . "<br/>";
        die();
    }
}
