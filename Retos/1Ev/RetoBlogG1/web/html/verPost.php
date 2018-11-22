<?php
session_start();
$id_articulo = $_POST["id_post"];
$usuario = $_SESSION["usuario"];
$id_usuario = $usuario["idUsuario"];

define('RAIZ_APLICACION', dirname(__FILE__));
include_once RAIZ_APLICACION . '/../php/Modelo/ArticuloDAO.php';
include_once RAIZ_APLICACION . '/../php/Vista/Vista.php';

$articuloDAO = new articuloDAO();
$vista = new Vista();
?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="title" content="G1Blog">
    <title>G1Blog</title>
    <link rel="stylesheet" href="css/main.css">
<script>
function borrarPost(){
    var idPost = document.getElementById('IdPost').value;
    var idAutor=document.getElementById('IdEscritor').value;
    if(idAutor==<?php echo $id_usuario ?>){

        var msg = confirm("¿Seguro de que desea eliminar este post?");
        if (msg) {
            window.location = "BorrarArticulo.php?did="+idPost;
        }
    }else{
        alert("Este no es tu post");
    }
    }

</script>
</head>

<body>
</article>
	<?php
if (isset($_SESSION["usuario"])) {
    $usuario = $_SESSION["usuario"];
    //echo $usuario["idUsuario"] . " " . $usuario["nombre"];
}

if (isset($_SESSION["listaArticulos"])) {
    echo "Hay lista de articulos";
}

?>
	<header id="initSesion">

		<form action="index1.php" method="POST">
			<input type="submit" value="Cerrar Sesion" name="Cerrar Sesion">
		</form>

		<form action="nuevoPost.php" method="POST">
            <input id="CrearPost" type="submit" value="Crear post" name="Crear post">
        </form>
        <button id="borrarPost" value="borrarPost" onclick="borrarPost()">Borrar Post</button>
    </header>

    <section class="text-left">
    <?php

echo $vista->mostrarUnicoArticulo($id_articulo);
?>
        <form action="CrearComentario.php" method="POST">
            <label>Texto</label> <textarea name="ComentarioPost" id="ComentarioPost" cols="30" rows="10"></textarea>
            <br><br>
            <input type="submit" value="Enviar" name="Enviar" >
            <input type="reset" value="Limpiar" name="Limpiar">
        </form>
    </section>
    <footer>
        <a href="index1.php">Volver al inicio</a>
        <a href="#menu" class="up-button"><img src="imagenes/menu-button.png"></a>
    </footer>
</body>
</html>