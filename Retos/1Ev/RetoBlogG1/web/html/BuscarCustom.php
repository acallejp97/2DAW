<?php
session_start();
define('RAIZ_APLICACION', dirname(__FILE__));

include_once RAIZ_APLICACION . '/../php/Controlador/articuloDTO.php';
include_once RAIZ_APLICACION . '/../php/Controlador/ArticuloControler.php';
include_once RAIZ_APLICACION . '/../php/Conexion/Conexion.php';

$fecha = $_POST["fecha"];
/*
 *  Array asociativo donde guardamos la lista de articulos filtrados por fecha
 *  para luego poder guardarlos en $_SESSION.
 */
$articulosTemp = [];
$articuloControl = new ArticuloControler();
$listaArticulos = $articuloControl->buscarPorFecha($fecha);

$articuloDto = new articuloDTO();
foreach ($listaArticulos as $articuloDto) {
    $listaArticulos1 = [
        "id" => $articuloDto->getIdArticulo(),
        "fecha" => $articuloDto->getFecha(),
        "id_autor" => $articuloDto->getIdAutor(),
        "texto" => $articuloDto->getTexto(),
        "valoracion" => $articuloDto->getValoracion(),
        "categoria" => $articuloDto->getIdCategoria(),
        "publicado" => $articuloDto->getPublicado(),
        "titulo" => $articuloDto->getTitulo(),
    ];
    array_push($articulosTemp, $listaArticulos1);
}

$_SESSION["listaArticulos"] = $articulosTemp;
/*foreach($listaArticulos as $articulo)
{
echo $articulo->toString();
$articulo=new articuloDTO();
}*/
header('Location: index1.php');
?>
<html>
    <head>
        <title>HOla</title>
    </head>
    <body>
        <?php
$articulo = new articuloDTO();
foreach ($listaArticulos as $articulo) {
    $articulo->toString();
    $articulo = new articuloDTO();
}
?>
    </body>
</html>
