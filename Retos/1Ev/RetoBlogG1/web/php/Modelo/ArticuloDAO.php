<?php
include_once RAIZ_APLICACION . "/../php/Controlador/articuloDTO.php";
include_once RAIZ_APLICACION . "/../php/Modelo/iArticulo.php";
include_once RAIZ_APLICACION . "/../php/Conexion/Conexion.php";

class ArticuloDAO implements iArticulo
{
    private $sqlALL = "SELECT * FROM articulos ORDER BY fecha";
    private $sqlByID = "SELECT * FROM articulos WHERE id = ";
    private $sqlUPDATE = "UPDATE articulos SET texto=?, valoracion=?, categoria=?, publicado=?, fecha=? WHERE id=?";
    private $sqlINSERT = "INSERT INTO articulos (fecha,texto,id_autor,valoracion,categoria,publicado,titulo) VALUES (?,?,?,?,?,?,?)";
    private $sqlDELETE = " DELETE FROM articulos WHERE id = ?";
    private $sqlSELECTByDATE = "SELECT * FROM articulos WHERE fecha>=";
    private $sqlCUSTOM = "SELECT * FROM articulos WHERE 1=1";

    public function trasformObjetcDto($articuloTemp1)
    {

        $articulo = new articuloDTO();
        $articulo->setIdArticulo($articuloTemp1["id"]);
        $articulo->setTitulo($articuloTemp1["titulo"]);
        $articulo->setFecha($articuloTemp1["fecha"]);
        $articulo->setTexto($articuloTemp1["texto"]);
        $articulo->setIdAutor($articuloTemp1["id_autor"]);
        $articulo->setValoracion($articuloTemp1["valoracion"]);
        $articulo->setIdCategoria($articuloTemp1["categoria"]);
        $articulo->setPublicado($articuloTemp1["publicado"]);
        return $articulo;
    }
    //Borra un articulo de la base de datos
    public function delete($idArticulo)
    {
        //Mirar si el execute devuelve algo para luego lanzar aviso en la parte de la vista.
        $db = Conexion::getInstance();
        $consulta = $db->prepare($this->sqlDELETE);
        $consulta->bindParam(1, $idArticulo);
        $temp = $consulta->execute();
        return $temp;
    }

    //Selecciona todos los registros de la base de datos
    public function selectALL()
    {
        $this->sqlALL = "SELECT * FROM articulos";
        $temp = [];
        $db = Conexion::getInstance();
        $listaArticulos = $db->query($this->sqlALL);
        while ($articuloTemp = $listaArticulos->fetch()) {
            $articulo = $this->trasformObjetcDto($articuloTemp);
            array_push($temp, $articulo);
        }
        return $temp;
    }

    public function selectCustom($nombre, $fecha)
    {
        $temp = [];
        if (isset($nombre)) {
            $this->sqlCUSTOM . " AND nombre='" . $nombre . "'";
        }
        if (isset($fecha)) {
            $this->sqlCUSTOM . " AND fecha='" . $fecha . "'";
        }
        $db = Conexion::getInstance();
        $listaArticulos = $db->query($this->sqlCUSTOM);
        while ($articuloTemp = $listaArticulos->fetch()) {
            $articulo1 = trasformObjetcDto($articuloTemp);
            array_push($temp, $articulo1);
        }
        return $temp;
    }

    //Actualiza un registro de la base de datos
    public function update($idArticulo, $fecha, $texto, $valoracion, $publicado, $titulo)
    {
        //Falta titulo y categoría.
        $db = Conexion::getInstance();
        $consulta = $db->prepare($this->sqlUPDATE);
        $consulta->bindParam(1, $texto);
        $consulta->bindParam(2, $valoracion);
        //  $consulta->bindParam(3, $categoria);
        $consulta->bindParam(4, $publicado);
        $consulta->bindParam(5, $fecha);
        $consulta->bindParam(6, $idArticulo);
        $temp = $consulta->execute();
        return $temp;
    }

    //Guarda un registro de la base de datos
    public function insert($fecha, $texto, $idAutor, $valoracion, $categoria, $publicado, $titulo)
    {

        $db = Conexion::getInstance();
        $consulta = $db->prepare($this->sqlINSERT);
        $consulta->bindParam(1, $fecha);
        $consulta->bindParam(2, $texto);
        $consulta->bindParam(3, $idAutor);
        $consulta->bindParam(4, $valoracion);
        $consulta->bindParam(5, $categoria);
        $consulta->bindParam(6, $publicado);
        $consulta->bindParam(7, $titulo);
        $temp = $consulta->execute();
        return $temp;
    }

    //Selecciona un articulo por el ideificador
    public function selectBYID($id)
    {
        $db = Conexion::getInstance();

        $listaPost = $db->query($this->sqlByID . $id);
        while ($articuloTemp = $listaPost ->fetch()) {
            $articulo = $this->trasformObjetcDto($articuloTemp);
        }
        return $articulo;
    }
    //Devuelve los articulos en función a la fecha de publicación
    public function selectByFecha($fecha)
    {

        $temp = []; //Variable para guardar y devolver la lista de articulos que salga de la SELECT
        $db = Conexion::getInstance();
        $this->sqlSELECTByDATE = "SELECT * FROM articulos WHERE fecha>='$fecha'";
        $listaArticulos = $db->query($this->sqlSELECTByDATE);
        while ($articuloTemp = $listaArticulos->fetch()) {
            $articulo = $this->trasformObjetcDto($articuloTemp);
            array_push($temp, $articulo);
        }
        return $temp;
    }

    public function selectBY($nombre, $email, $fecha)
    {

    }

}
