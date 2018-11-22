<?php
class usuariosDTO
{
    private $idUsuario; //Id del usuario en la BD. Se crea automaticamente en la BD
    private $nombre; //Nombre que ha elegido el usuario para identificarse
    private $passwword; //Password para identificarse
    private $email; //Email de contacto con el usuario
    private $permisos; //Permisos a la hora de crear, modificar, borrar o actualizar un registro. 1: Admin 2:Usuario

    public function __construct()
    {
        $this->idUsuario = 0; //Id del usuario en la BD
        $this->nombre = "No definido"; //Este y los dos siguientes tienen que ser siempre string
        $this->passwword = "No definido";
        $this->email = "No definido";
        $this->permisos = 2; //Inicialmente lo inicializamos como usuario
    }
    //Funciones para definir el valor de los atributos
    public function setIdUsuario($id)
    {
        $this->idUsuario = $id;
    }

    public function setNombre($name)
    {
        $this->nombre = $name;
    }

    public function setPwd($contrasenia)
    {
        $this->password = $contrasenia;
    }

    public function setEmail($correo)
    {
        $this->email = $correo;
    }

    public function setPermisos($permiso)
    {
        $this->permisos = $permiso;
    }

    //Funciones para obtener los atributos de la clase
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function getnombre()
    {
        return $this->nombre;
    }

    public function getPwd()
    {
        return $this->password;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPermisos()
    {
        return $this->permisos;
    }

    public function toString()
    {
        return "<p>Id: " . $this->idUsuario . " Nombre: " . $this->nombre . " Email: " . $this->email . "</p>";
    }
}
