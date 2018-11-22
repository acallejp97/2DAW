<?php
class articuloDTO
{
    private $idArticulo; //Clave primaria del articulo en la BD. Se crea automaticamente al guardar registro
    private $fecha; //Fecha en la que se publico
    private $texto; //Contenido del articulo
    private $idAutor; //Clave primaria de la tabla usuarios para identificar al autor del articulo
    private $valoracion; //La nota que le han puesto los demás usuarios.
    private $idCategoria; //Identificador de la clase a la que pertenece. Hay tres, Solo puede pertenecer a una
    private $publicado;
    private $titulo;
    public function __construct()
    {
        $this->idArticulo = 0;
        $this->fecha = "1990-01-01";
        $this->texto = "No definido";
        $this->idAutor = 0;
        $this->valoracion = 0;
        $this->idCategoria = 0;
        $this->publicado = false;
        $this->titulo = "No definido";
    }

    //Funciones para definir el valor de los atributos

    public function setIdArticulo($id)
    {
        $this->idArticulo = $id;
    }

    public function setFecha($date)
    {
        $this->fecha = $date;
    }

    public function setTexto($text)
    {
        $this->texto = $text;
    }

    public function setIdAutor($id)
    {
        $this->idAutor = $id;
    }

    public function setValoracion($valor)
    {
        $this->valoracion = $valor;
    }

    public function setIdCategoria($cate)
    {
        $this->idCategoria = $cate;
    }

    public function setPublicado($public)
    {
        $this->publicado = $public;
    }
    //Funciones para obtener los atributos de la clase

    public function getIdArticulo()
    {
        return $this->idArticulo;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function getTexto()
    {
        return $this->texto;
    }

    public function getIdAutor()
    {
        return $this->idAutor;
    }

    public function getValoracion()
    {
        return $this->valoracion;
    }

    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    public function getPublicado()
    {
        return $this->publicado;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function toString()
    {
        return "<p><br>Id: " . $this->idArticulo . "<br>Fecha: " . $this->fecha . "<br>Texto: " . $this->texto . "<br> Publicado: " . $this->publicado . "<br> Valoración: </p>".$this->valoracion;
    }
}
