<?php
class comentariosDTO
{
    private $idComentario;
    private $comentario;
    private $fecha;
    private $idArticulo;
    private $idAutor;

    public function __construct()
    {
        $this->idComentario = 0;
        $this->fecha = "01/01/1900";
        $this->comentario = "No definido";
        $this->idArticulo = 0;
        $this->idAutor = 0;
    }

    //Funciones para definir el valor de los atributos

    public function setIdComentario($id)
    {
        $this->idComentario = $id;
    }

    public function setComentario($texto)
    {
        $this->comentario = $texto;
    }

    public function setFecha($date)
    {
        $this->fecha = $date;
    }

    public function setIdArticulo($id)
    {
        $this->idArticulo = $id;
    }
    public function setIdAutor($id)
    {
        $this->idAutor = $id;
    }

    //Funciones para obtener los atributos de la clase

    public function getIdComentario()
    {
        return $this->idComentario;
    }

    public function getComentario()
    {
        return $this->comentario;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function getIdArticulo()
    {
        return $this->idArticulo;
    }
    public function getIdAutor()
    {
        return $this->idAutor;
    }

    public function toString()
    {
        return "Id Articulo: " . $this->idComentario . " Texto: " . $this->comentario . " Id Autor: " . $this->idArticulo . "<br>";
    }
}
