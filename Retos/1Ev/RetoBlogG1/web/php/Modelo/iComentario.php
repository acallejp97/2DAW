<?php
interface iComentario
{
    public function selectALL(); //Devuelve todos los comentarios
    public function selectByID($idComentario, $idOrder); /*Devuelve el contenido del comentario para
    cambiarlo si lo ha pedido el autor o el admin*/
    public function insert($comentario, $fecha, $idArticulo, $idOrder); //Guarda un articulo nuevo
    public function update($id, $texto, $fecha, $idArticulo, $idUsuario); /*Actualiza el contenido de un comentario si lo
    intenta el autor o el administrador*/
    public function delete($idComentario, $idArticulo, $idOrder); //Borrar un comentario de un articulo si lo solicita el autor o el administrador
}
