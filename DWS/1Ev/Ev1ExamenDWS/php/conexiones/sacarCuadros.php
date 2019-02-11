<?php

include RAIZ_APLICACION . "/conexion/Conexion.php";

$numeroCuadros = numeroCuadros();
for ($cuadro = 1; $cuadro <= $numeroCuadros; $cuadro++) {
    ?>
    <div class="imagen">
        <img src='../html/imagenes/<?php echo foto($cuadro) ?>'>
        <div>
            <a strong><?php echo nombre($cuadro) ?></a><br />
            <a>Autor: <?php echo autor($cuadro) ?></a>
        </div>
    </div>

<?php

}

function numeroCuadros()
{
    $sqlSelectUltimoCuadro = "SELECT COUNT(*) FROM cuadro";
    $db = Conexion::getInstance();
    $ultimoCuadro = $db->query($sqlSelectUltimoCuadro);
    $cuadro = $ultimoCuadro->fetch();
    return $cuadro[0];
}

function foto($numeroCuadro)
{
    $sqlSelectFotoCuadro = "SELECT foto_cuadro FROM cuadro WHERE cod_cuadro = " . $numeroCuadro;
    $db = Conexion::getInstance();
    $fotoCuadro = $db->query($sqlSelectFotoCuadro);
    $foto = $fotoCuadro->fetch();
    return $foto[0];
}

function nombre($numeroCuadro)
{
    $sqlSelectNombreCuadro = "SELECT nom_cuadro FROM cuadro WHERE cod_cuadro = " . $numeroCuadro;
    $db = Conexion::getInstance();
    $nombreCuadro = $db->query($sqlSelectNombreCuadro);
    $nombre = $nombreCuadro->fetch();
    return $nombre[0];
}

function autor($numeroCuadro)
{
    $sqlSelectNumeroAutor = "SELECT autor FROM cuadro WHERE cod_cuadro = " . $numeroCuadro;
    $db = Conexion::getInstance();
    $numeroAutor = $db->query($sqlSelectNumeroAutor);
    $idAutor = $numeroAutor->fetch();
    $sqlSelectNombreAutor = "SELECT nom_autor FROM autor WHERE cod_autor = " . $idAutor[0];
    $nombreAutor = $db->query($sqlSelectNombreAutor);
    $autor = $nombreAutor->fetch();
    return $autor[0];
}
?>