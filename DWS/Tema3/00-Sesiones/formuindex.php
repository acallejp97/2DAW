<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Formulario inscripcion</title>
</head>
<body>
  <form action="confirm.php" method="post">
    <h1 align="center"> Formulario de inscripcion de usuarios</h1>
    <br><br>
    <table border="1" align="center" BGCOLOR="#D8D8D8">
      <tr>
        <td>Nombre completo:</td>
        <td><input type="text" name="nombre" id="nombre"></td>
      </tr>
      <tr>
        <td>Direccion:</td>
        <td> <textarea name="direccion" id="direccion"></textarea></td>
      </tr>
      <tr>
        <td> Correo electronico:</td>
        <td> <input type="text" name="email" id="email">
      </tr>
      </td>
      <tr>
        <td> Contrase&ntilde;a:</td>
        <td> <input type="password" name="pass" id="pass">
      </tr>
      </td>
      <tr>
        <td> Confirmar Contrase&ntilde;a:</td>
        <td> <input type="password" name="pass2" id="pass2">
      </tr>
      </td>
      <tr>
        <td> Fecha de nacimiento: </td>
        <td>
          <select name="month">
            <option value="0"> Seleccione un mes</option>
            <option value="Enero"> Enero</option>
            <option value="Febrero"> Febrero</option>
            <option value="Marzo"> Marzo</option>
            <option value="Abril"> Abril</option>
            <option value="Mayo"> Mayo</option>
            <option value="Junio"> Junio</option>
            <option value="Julio"> Julio</option>
            <option value="Agosto"> Agosto</option>
            <option value="Septiembre"> Septiembre</option>
            <option value="Octubre"> Octubre</option>
            <option value="Noviembre"> Noviembre</option>
            <option value="Diciembre"> Diciembre</option>
          </select>
          <select name="day">
            <?php
for ($i = 1; $i <= 31; $i++) {print(" <option value='$i'> $i</option>");}
?>
          </select>
          <input type="text" name="year" id="year" size="4" maxlength="4"></td>
      </tr>
      <tr>
        <td>Sexo:</td>
        <td>
          <input type="radio" name="sexo" value="Hombre"> Hombre
          <input type="radio" name="sexo" value="Mujer"> Mujer
      </tr>
      </td>
      <tr>
        <td>Por favor, elige los temas de inter&eacute;s</td>
        <td>
          <input type="checkbox" name="temas[]" value="Comedia"> Comedia
          <input type="checkbox" name="temas[]" value="Accion"> Accion<br>
          <input type="checkbox" name="temas[]" value="Suspense"> Suspense
          <input type="checkbox" name="temas[]" value="Terror"> Terror<br>
          <input type="checkbox" name="temas[]" value="Ficcion"> Ficcion
      </tr>
      </td>

      <tr>
        <td> Selecciona tus aficiones:</td>
        <td>
          <select multiple name="aficiones[]">
            <option value="aire"> Deporte-aire-libre</option>
            <option value="Pop"> Musica-Pop</option>
            <option value="Rock"> Musica-Rock</option>
            <option value="Futbol"> Futbol</option>
            <option value="basket"> Baloncesto</option>
          </select>
      </tr>
      </td>
    </table><br><br>
    <center>
      <input type="submit" name="submit" value="Enviar Formulario">
    </center>
  </form>
</body>

</html>