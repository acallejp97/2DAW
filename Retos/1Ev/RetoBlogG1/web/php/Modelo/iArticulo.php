<?php
interface iArticulo
{
    public function selectALL(); //Saca todos los articulos publicados ordenados por fecha
    public function selectBYID($id); /*Saca los articulos filtrados por nombre del autor
    (o su email) y/o la fecha de publicación*/
    public function selectByFecha($fecha);
    public function delete($idArticulo); /*Borra un articulo identificando si es el autor o el
    administrador*/
    public function update($idArticulo, $fecha, $texto, $valoracion, $publicado, $titulo); /*Actualiza el contenido del articulo (solo el autor o
    el administrador)*/
    public function insert($fecha, $texto, $idAutor, $valoracion, $categoria, $publicado, $titulo);
}
