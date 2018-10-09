<?php
session_start();
$_SESSION["pregunta"] = $_REQUEST['pregunta'];
$_SESSION["respuesta"] = $_REQUEST['respuesta'];

$nombre = $_SESSION['nombre'];
$apellidos = $_SESSION['apellidos'];
$curso = $_SESSION['curso'];
$preguntada = $_REQUEST['pregunta'];
$respuesta = $_REQUEST['respuesta'];
?>

<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EXAMEN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="ejercicio_nombreAlumno.php" method="post">

<h1>EXAMEN
    <?php
if ($curso == 1) {
    print("1");
} else {
    print("2");
}
?> ºCURSO</h1>
    <h2>Preguntas para el alumno <?php print("$nombre $apellidos");?></h2>
    <br><br>
    <p>La solucion de respuestas anteriores</p>
<?php
$preguntas = array(
    1978 => "¿En que año fué la constitución española?",
    "BLANCO" => "¿De que color es el caballo blanco de santiago?",
    "EL FANTASTICO RALPH" => "En que año fué 1+1",
    "EVA" => "¿Como se llamaba la primera mujer según la biblia?",
    "ADAN" => "¿Como se llamaba el primer hombre según la biblia?",
    2 => "¿Cuanto es 1+1?",
    "WINDOWS" => "¿Como se llama el SO de Microsoft?",
    "JULIA" => "¿Cual es el nombre de la profesora de DWS?",
    "DESARROLLO WEB EN ENTORNO SERVIDOR" => "¿Que significan las siglas DWS?",
    "AGUA" => "Escribe agua para conseguir el punto");
$bien = 0;
for ($i = 0; $i < 3; $i++) {
    $pregunta = $preguntas[strtoupper($respuesta[$i])];
    for ($j = 0; $j < count($preguntada); $j++) {
        if ($pregunta == $preguntada[$j]) {
            $bien++;
        }
    }

}
print("Has acertado $bien,");
switch ($bien) {
    case 0:
        print(" empieza a estudiar");
        break;
    case 1:
        print(" hay que estudiar mas");
        break;
    case 2:
        print(" muy bien");
        break;
    case 3:
        print(" perfecto!!");
        break;

}
?>

      <input type="submit" name="submit" value="Enviar">
</body>
</html>
