<?php
include_once RAIZ_APLICACION . "/../php/Controlador/comentariosDTO.php";
include_once RAIZ_APLICACION . "/../php/Modelo/iComentario.php";

/**
 * Description of ComentarioDAO
 *
 * @author victor manuel
 */
class ComentarioDAO//implements iComentario

{
    private $sqlALL = "SELECT * FROM comentarios";
    private $sqlByID = "SELECT * FROM comentarios WHERE id_articulos=";
    private $sqlUPDATE = "UPDATE comentarios SET comentario=?, fecha=?, id_articulos=?, id_usuario=? WHERE id=?";
    private $sqlINSERT = "INSERT INTO comentarios (comentario,fecha,id_articulos,id_usuario) VALUES (?,?,?,?)";
    private $sqlDELETE = " DELETE FROM comentarios WHERE id=?";
    //Borra un comentario de la base de datos. Devuelve el número de filas afectadas
    public function delete($idComentario, $idArticulo, $idUsuario)
    {
        $db = Conexion::getInstance();
        $consulta = $db->prepare($this->sqlDELETE);
        $consulta->bindParam(1, $idComentario);
        $temp = $consulta->execute();
        return $temp;
    }

    //Selecciona todos los registros de la base de datos y los devuelve en un array de objetos tipo comentarioDTO
    public function selectALL()
    {
        $temp = [];
        $db = Conexion::getInstance();
        $listaComentarios = $db->query($this->sqlALL);
        while ($comentarioTemp = $listaComentarios->fetch()) {
            $comentario = new comentariosDTO();
            $comentario->setIdComentario($comentarioTemp["id"]);
            $comentario->setComentario($comentarioTemp["texto"]);
            $comentario->setFecha($comentarioTemp["fecha"]);
            $comentario->setIdArticulo($comentarioTemp["id_articulos"]);
            $comentario->setIdAutor($comentarioTemp["id_usuario"]);
            array_push($temp, $comentario);
            echo $comentario->toString();
        }
        return $temp;
    }

    //Actualiza un registro de la base de datos
    public function update($id, $texto, $fecha, $idArticulo, $idUsuario)
    {
        //private $sqlUPDATE = "UPDATE comentarios SET comentario=?, fecha=?, id_articulos=?, id_usuario WHERE id=?";
        $db = Conexion::getInstance();
        $consulta = $db->prepare($this->sqlUPDATE);
        $consulta->bindParam(1, $texto);
        $consulta->bindParam(2, $fecha);
        $consulta->bindParam(3, $idArticulo);
        $consulta->bindParam(4, $idUsuario);
        $consulta->bindParam(5, $id);
        $temp = $consulta->execute();
        return $temp;
    }

    //Guarda un registro de la base de datos
    public function insert($texto, $fecha, $id_articulos, $id_usuario)
    {
        //private $sqlINSERT = "INSERT INTO comentarios (texto,fecha,id_articulos,id_usuario) VALUES (?,?,?,?)";
        $db = Conexion::getInstance();
        $consulta = $db->prepare($this->sqlINSERT);
        $consulta->bindParam(1, $texto);
        $consulta->bindParam(2, $fecha);
        $consulta->bindParam(3, $id_articulos);
        $consulta->bindParam(4, $id_usuario);

        $temp = $consulta->execute();
        return $temp;
    }

    //Selecciona un comentario por el identificador
    public function selectBYID($idComentario, $idArticulo)
    {
        $listaComentarios = [];
        /*Creamos la consulta, conseguimos una instancia de la conexión y
         * ejecutamos la sentnecia*/
        $this->sqlByID = $this->sqlByID . $idArticulo;
        $db = Conexion::getInstance();
        $comentario = $db->query($this->sqlByID);
        /* Con lo que ha devuelto la BD creamos una lista de  objetos comentariosDTO
        y lo mandamos fuera      */
        $comentarioDto = new comentariosDTO();
        while ($comentario1 = $comentario->fetch()) {
            $comentarioDto->setIdComentario($comentario1["id"]);
            $comentarioDto->setComentario($comentario1["comentario"]); //setComentario($comentario1["comentario"]);
            $comentarioDto->setFecha($comentario1["fecha"]);
            $comentarioDto->setIdArticulo($comentario1["id_articulos"]);
            $comentarioDto->setIdAutor($comentario1["id_usuario"]);
            array_push($listaComentarios, $comentarioDto);
            $comentarioDto = new comentariosDTO();
        }
        return $listaComentarios;

    }

    //Devuelve los comentarios en función a la fecha de publicación
    public function selectByFecha($fecha)
    {

    }
}
