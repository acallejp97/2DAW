<?php
session_start();
$preguntas = $_POST["pregunta"];
foreach ($preguntas as $pregunta) {
    print("$pregunta<BR>\n");
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <h1>EXAMEN 
        <?php
if ($_SESSION["curso"] == "Primero") {
    print("1º CURSO");
} else {
    print("2º CURSO");
}?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<h2> Respuestas examen :  <?php print($_SESSION["nombre"] . "\t" . $_SESSION["apellidos"])?>
    <p>La solucion a las preguntas anteriores</p>

    <?php
// print($preguntas);
echo ("<a href=\"javascript:history.go(-2);\"> <== Volver a examen </a>"); ?>
</body>
</html>