<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <!--        Programa que imprime por pantalla el numero que yo haya
introducido entre el 20 y el 60 de forma escrita-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Confirm</title>

</head>

<body>
    <form action="sesiones.php" method="post">
        <?php
$nombre = $_SESSION['nombre'];
$direccion = $_SESSION['direccion'];
$email = $_SESSION['email'];
$pass = $_SESSION['pass'];
$month = $_SESSION['month'];
$day = $_SESSION['day'];
$year = $_SESSION['year'];
$sexo = $_SESSION['sexo'];
$temas = $_SESSION['temas'];
$aficiones = $_SESSION['aficiones'];
?>

        <h1 align="center"> Pagina de confirmacion del registro de usuario</h1>
        <br><br>
        <table border="1" align="center" BGCOLOR="red">
            <tr>
                <td>Nombre completo:</td>
                <td> <?php print($nombre)?>
                </td>
            </tr>
            <tr>
                <td>Direccion:</td>
                <td> <?php print($direccion)?>
                </td>
            </tr>
            <tr>
                <td>Correo electronico:</td>
                <td> <?php print($email)?>
            </td>
        </tr>
            <tr>
                <td>Contrase&ntilde;a:</td>
                <td> <?php print($pass)?></td>
            </tr>
            <tr>
                <td>Fecha de nacimiento: </td>
                <td> <?php print($day)?>/<?php print($month)?>/<?php print($year)?></td>
            </tr>
            <tr>
                <td>Sexo:</td>
                <td><?php print($sexo)?></td>
            </tr>
            <tr>
                <td>Por favor, elige los temas de inter&eacute;s</td>
                <td><?php foreach ($temas as $tema2) {print($tema2 . ", ");}?></td>
            </tr>
            <tr>
                <td> Selecciona tus aficiones:</td>
                <td><?php foreach ($aficiones as $afi) {print($afi . ", ");}?></td>
            </tr>
        </table>
        <br><br>
    </form>
</body>
</html>