<?php
include_once RAIZ_APLICACION . "/../php/Modelo/UsuarioDAO.php";
include_once RAIZ_APLICACION . "/../php/Controlador/usuarioDTO.php";
class UsuarioController
{
    private $usuarioDao;
    public function __construct()
    {
        $this->usuarioDao = new UsuarioDAO();
    }
    /* Llama a la funcion selectALL de la clase UsuarioDAO para buscar todos los usuarios guardados en la BD. Devuelve un array de objetos usarioDTO*/
    public function buscarTodosUsuarios()
    {
        $temp = [];
        $temp = $this->usuarioDao->selectALL();
        return $temp;
    }
    /* Llama a la funcion insert de la clase UsuarioDAO para guardar un usuario guardados en la BD.  Devuelve el número de filas de la BD afectadas*/
    public function altaUsuario($nombre, $password, $email, $permisos)
    {

        $temp = $this->usuarioDao->insert($nombre, $password, $email, $permisos);
        return $temp;
    }

    /* Llama a la funcion update de la clase UsuarioDAO para actualizar un usuario guardados en la BD. Devuelve el número de filas de la BD afectadas*/
    public function actualizarUsuario($id, $nombre, $email)
    {
        $temp = $this->usuarioDao->update($id, $nombre, $email);
        return $temp;
    }

    /* Llama a la funcion delete de la clase UsuarioDAO para borrar un usuario guardados en la BD. Devuelve el número de
    filas afectadas*/
    public function borrarUsuario($idUsuarioBorrar, $idOrder)
    {
        $temp = $this->usuarioDao->delete($idUsuarioBorrar, $idOrder);
        Conexion::cerrar();
        return $temp;
    }
    /* Llama a la funcion selectLogin de la clase UsuarioDAO para buscar un usuario(si existe) guardado en la BD que intenta
    iniciar sesión. Devuelve un objeto usuarioDTO con todos los datos del usuario*/
    public function login($name, $pwd)
    {
        $temp = $this->usuarioDao->selectLogin($name, $pwd);
        return $temp;
    }


}
