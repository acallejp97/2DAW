<?php
session_start();
$_SESSION["nombre"] = $_REQUEST['nombre'];
$_SESSION["apellidos"] = $_REQUEST['apellidos'];
$_SESSION["curso"] = $_REQUEST['curso'];

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$curso = $_POST["curso"];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <h1>EXAMEN <?php

if ($curso == "Primero") {
    print("1º CURSO");
} else {
    print("2º CURSO");
}?></h1>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
$preguntas = array(
    "¿De que asignatura es este ejercicio?",
    "¿Cuanto es 2 + 2?",
    "¿Con un 5 apruebas?",
    "¿En que año fue supuestamente el hombre a la luna?",
    "¿En que mes aterrizo el hombre en la luna?",
    "¿Que asignatura nos da insausti?",
    "¿Cuanto es 2 * 2?",
    "¿Con un 4,9 apruebas?",
    "¿En que año se empezo a usar Google como navegador?",
    "¿En que mes celebramos la navidad?",
);
?>
    <h2> Preguntas para alumno <?php print($nombre . "\t" . $apellidos)?>
    <p> Responda a las siguientes preguntas</p>
<form action="respuesta.php" method="POST">

    <?php

if ($curso == "Primero") {
    for ($i = 0; $i <= 2; $i++) {
        print($i + 1) . ".\t" . $preguntas[rand(0, 4)] . "<br>";
        ?>
            <td><input type="text". name="pregunta[]"./><br></td>.
            <?php
}
} else {
    for ($i = 0; $i <= 2; $i++) {
        print($i + 1) . ".\t" . $preguntas[rand(5, 9)] . "<br>";
        ?>
            <td><input type="text" name="pregunta[]"./><br></td>
            <?php
}
}
?>

    <input type="submit" name="enviar" value="Enviar">
    <input type="reset" name="borrar" value="Borrar">

    </form>
</body>
</html>