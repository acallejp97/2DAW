<?php
session_start();
$_SESSION["nombre"] = $_REQUEST['nombre'];
$_SESSION["direccion"] = $_REQUEST['direccion'];
$_SESSION["email"] = $_REQUEST['email'];
$_SESSION["pass"] = $_REQUEST['pass'];
$_SESSION["month"] = $_REQUEST['month'];
$_SESSION["day"] = $_REQUEST['day'];
$_SESSION["year"] = $_REQUEST['year'];
$_SESSION["sexo"] = $_REQUEST['sexo'];
$_SESSION["temas"] = $_REQUEST['temas'];
$_SESSION["aficiones"] = $_REQUEST['aficiones'];

?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Confirm</title>

</head>

<body>
    <form action="sesiones.php" method="post">
        <?php
$nombre = $_REQUEST['nombre'];
$direccion = $_REQUEST['direccion'];
$email = $_REQUEST['email'];
$pass = $_REQUEST['pass'];
$month = $_REQUEST['month'];
$day = $_REQUEST['day'];
$year = $_REQUEST['year'];
$sexo = $_REQUEST['sexo'];
$temas = $_REQUEST['temas'];
$aficiones = $_REQUEST['aficiones'];
?>

        <h1 align="center"> Pagina de confirmacion del registro de usuario</h1>
        <br><br>
        <table border="1" align="center" BGCOLOR="#F6CED8">
            <tr>
                <td>Nombre completo:</td>
                <td>
                    <?php print($nombre)?>
                </td>
            </tr>
            <tr>
                <td>Direccion:</td>
                <td>
                    <?php print($direccion)?>
                </td>
            </tr>
            <tr>
                <td>Correo electronico:</td>
                <td>
                    <?php print($email)?>
            </tr>
            </td>
            <tr>
                <td>Contrase&ntilde;a:</td>
                <td>
                    <?php print($pass)?>
            </tr>
            </td>
            <tr>
                <td>Fecha de nacimiento: </td>
                <td>
                    <?php print($day)?>/
                    <?php print($month)?>/
                    <?php print($year)?>
                </td>
            </tr>
            <tr>
                <td>Sexo:</td>
                <td>
                    <?php print($sexo)?>
            </tr>
            </td>
            <tr>
                <td>Por favor, elige los temas de inter&eacute;s</td>
                <td>
                    <?php foreach ($temas as $tema2) {print($tema2 . ", ");}?>
            </tr>
            </td>
            <tr>
                <td> Selecciona tus aficiones:</td>
                <td>
                    <?php foreach ($aficiones as $afi) {print($afi . ", ");}?>
            </tr>
            </td>
        </table><br><br>
        <center>
            <input type="submit" name="submit" value="Enviar Formulario">
        </center>

    </form>
</body>

</html>