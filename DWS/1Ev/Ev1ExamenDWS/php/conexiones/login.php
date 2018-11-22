<?php
session_start();

define('RAIZ_APLICACION', dirname(__FILE__));

include RAIZ_APLICACION . '/../conexion/Conexion.php';

$usuario = $_POST["usuario"];
$pwd = $_POST["passwd"];

$usuarioDto = new usuarioDTO();
$usuarioDto = login($usuario, $pwd);
if ($usuarioDto != "Usuario o contraseña incorrectos") {
    $user["id"] = $usuarioDto->getIdUsuario();
    $user["nombres"] = $usuarioDto->getNombres();
    $user["usuario"] = $usuarioDto->getUsuario();
    $_SESSION["usuario"] = $user;
    header("Location: ../../index.php");
} else {
    echo "<script>alert('" . $usuarioDto . "');location=\"../iniciarsesion.php\";</script>";
}

function login($name, $pwd)
{
    $temp = selectLogin($name, $pwd);
    return $temp;
}

function selectLogin($name, $pwd)
{
    $sqlSelectLogin = "SELECT * FROM usuarios WHERE usuario='" . $name . "' AND password='" . $pwd . "'";
    $db = Conexion::getInstance();
    $listaUsuarios = $db->query($sqlSelectLogin);
    $usuario = new usuarioDTO();
    $usuarioTemp = $listaUsuarios->fetch();
    if ($usuarioTemp["id"] != null) {
        $usuario = new usuarioDTO();
        $usuario->setidUsuario($usuarioTemp["id"]);
        $usuario->setNombres($usuarioTemp["nombres"]);
        $usuario->setUsuario($usuarioTemp["usuario"]);
        return $usuario;
    } else {
        return "Usuario o contraseña incorrectos";
    }
}

class usuarioDTO
{
    private $idUsuario;
    private $nombres;
    private $usuario;

    public function __construct()
    {
        $this->idUsuario = 0;
        $this->nombre = "No definido";
        $this->usuario = "No definido";
    }
    public function setIdUsuario($id)
    {
        $this->idUsuario = $id;
    }

    public function setNombres($name)
    {
        $this->nombres = $name;
    }

    public function setUsuario($user)
    {
        $this->usuario = $user;
    }
////////////////////////////////////////
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function getNombres()
    {
        return $this->nombre;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

}
