<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EXAMEN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="parteDos.php" method="post">
    <h1>Datos alumno</h1>
    <br><br>
    <p>Escriba los siguientes datos</p>
    <table border="1" align="center" BGCOLOR="#D8D8D8">
    <tr>
       <td>Nombre:</td>
       <td><input type="text" name="nombre" id="nombre"></td>
    </tr>
    <tr>
       <td>Apellidos:</td>
       <td><input type="text" name="apellidos" id="apellidos"></td>
    </tr>
    <tr>
        <td>Curso:</td>
        <td>
        <select name="curso">
            <option value="1" selected>Primero</option>
            <option value="2">Segundo</option>
        </td>
    </tr>
    </table>
      <input type="submit" name="submit" value="Enviar">
      <input type="reset" name="reset" value="Borrar">
</body>
</html>
