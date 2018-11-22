<?php
include_once RAIZ_APLICACION . '/../php/Modelo/ComentarioDAO.php';
include_once RAIZ_APLICACION . '/../php/Controlador/comentariosDTO.php';

class ComentarioControler
{
    private $comentarioDao;

    public function __construct()
    {
        $this->comentarioDao = new ComentarioDAO();
    }

    /*Llama a la funcio de ComentariosDAO que busca todos los comentarios y los devuelve en un array de objetos comentariosDTO*/
    public function buscarTodosComentarios()
    {

        $listacomentarios = $this->comentarioDao->selectALL();
        return $listacomentarios;
    }
    /*Llama a la funcion ComentarioDAO para actualizar un comentario. Devuelve el número de filas afectadas*/
    public function actualizarComentario($id, $texto, $fecha, $idArticulo, $idUsuario)
    {
        $numFilas = $this->comentarioDao->update($id, $texto, $fecha, $idArticulo, $idUsuario);
        return $numFilas;
    }
    
    /*Guarda un comentario en la BD. Devuelve el número de registros que ha guardado*/
    public function guardarRegistro($texto, $fecha, $id_articulos, $id_usuario)
    {
        $numFilas = $this->comentarioDao->insert($texto, $fecha, $id_articulos, $id_usuario);
        return $numFilas;
    }
    /*LLama a la función SelectById para buscar un comentario por su Id y lo devuelve*/
    public function buscarComentarioPorID($idComentario, $idArticulo)
    {
        $listaComentarios = [];
        $listaComentarios = $this->comentarioDao->selectBYID($idComentario, $idArticulo);
        return $listaComentarios;
    }
}
