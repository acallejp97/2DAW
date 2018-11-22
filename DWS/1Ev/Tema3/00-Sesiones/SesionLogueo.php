<?php
session_start();
?>
<html>
<head>
<!--        Programa que imprime por pantalla el numero que yo haya
introducido entre el 20 y el 60 de forma escrita-->
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title>Formulario inscripcion</title>

</head>
<body>

    <form action="SesionLogueo2.php" method ="post">
        <table border="1" align="center" BGCOLOR="pink">
  <tr> <td>Nombre completo:</td>  <td><input type="text" name="user" id="user"></td></tr>
  <tr> <td>  Contrase&ntilde;a:</td><td> <input type="password" name="pass" id="pass">  </td></tr>
        </table>
        <center>
        <input  type="submit"  name="submit" value="Enviar Formulario">
        </center>
        </form>
</body>
</html>
