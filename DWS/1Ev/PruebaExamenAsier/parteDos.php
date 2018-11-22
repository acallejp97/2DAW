<?php
session_start();
$_SESSION["nombre"] = $_REQUEST['nombre'];
$_SESSION["apellidos"] = $_REQUEST['apellidos'];
$_SESSION["curso"] = $_REQUEST['curso'];
$nombre = $_REQUEST['nombre'];
$apellidos = $_REQUEST['apellidos'];
$curso = $_REQUEST['curso'];
?>
<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EXAMEN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="parteTres.php" method="post">
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
    <p>Responda las siguientes preguntas</p>
<?php
$preguntas = array(
    "¿En que año fué la constitución española?",
    "¿De que color es el caballo blanco de Santiago?",
    "En que año fué 1+1",
    "¿Como se llamaba la primera mujer según la biblia?",
    "¿Como se llamaba el primer hombre según la biblia?",
    "¿Cuanto es 1+1?",
    "¿Como se llama el SO de Microsoft?",
    "¿Cual es el nombre de la profesora de DWS?",
    "¿Que significan las siglas DWS?",
    "Escribe agua para conseguir el punto");
// $numeroPregunta=array();
for ($i = 0; $i < 3; $i++) {

    $numeroPregunta = random($curso);
    // comprobarRandom($numeroPregunta);
    $pregunta = $preguntas[$numeroPregunta];
    print(($i + 1) . ".- " . $pregunta .
        "<input type=\"hidden\" name=\"pregunta[]\" value=\"$numeroPregunta\">" .
        "<input type=\"text\" name=\"respuesta[]\">
    <br>");

}

// function comprobarRandom($numero)
// {
//     for ($i = 0; $i < count($numeroPregunta) - 1; $i++) {
//         if ($numeroPregunta[$i] == $numero) {
//             $numeroPregunta[$i] = random($curso);
//             comprobarRandom($numeroPregunta);
//         }
//     }
// }

function random($curso)
{
    if ($curso == 1) {
        return $random = rand(0, 4);
    } else {
        return $random = rand(5, 9);
    }
}
?>

      <input type="submit" name="submit" value="Responder">
      <input type="reset" name="reset" value="Borrar">
</body>
</html>
