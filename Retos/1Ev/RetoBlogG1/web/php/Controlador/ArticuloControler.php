<?php
include_once RAIZ_APLICACION . "/../php/Modelo/ArticuloDAO.php";
include_once RAIZ_APLICACION . "/../php/Controlador/articuloDTO.php";
class ArticuloControler
{
    private $articuloDao;

    public function __construct()
    {
        $this->articuloDao = new ArticuloDAO();
    }
    /*Llama a la función selectALL de ArticuloDAO y devuelve la lista de todos los articulos*/
    public function buscarTodosArticulos()
    {
        $temp = $this->articuloDao->selectALL();
        return $temp;
    }
    /*Llama a la función insert de ArticuloDAO para guardar un nuevo comentario en la BD. Devuelve el número de registros insertados*/
    public function guardarArticulo($fecha, $texto, $idAutor, $valoracion, $categoria, $publicado, $titulo)
    {

        $temp = $this->articuloDao->insert($fecha, $texto, $idAutor, $valoracion, $categoria, $publicado, $titulo);
        return $temp;
    }

   /*Llama a la funcion delete de articuloDao para borrar el articulo del que pasemos el id*/
    public function borrarArticulo($idArticulo)
    {

        $temp = $this->articuloDao->delete($idArticulo);
        return $temp;
    }
    /*Llama a la function update de ArticuloDAO para actualizar un articulo. Devuevlve el número de filas actualizadas*/
    public function actualizarArticulo($idArticulo, $fecha, $texto, $valoracion, $publicado, $titulo)
    {
        $temp = $this->articuloDao->update($idArticulo, $fecha, $texto, $valoracion, $publicado, $titulo, $idOrder);
        return $temp;
    }
    /*Llama a la función selectBYID para buscar un articulo por el id. Devuevle un objeto DTO con los datos que ha devuelto la BD*/
    public function buscarArticuloPorId($id)
    {
        $articuloDto = new articuloDTO();
        $articuloDto = $this->articuloDao->selectBYID($id);
        return $articuloDto;
    }
    /*Llama a la función selectByFecha de ArticuloDAO para buscar articulos a partir de una fecha (que sea mayor o igual a la que le pasamos). Devuelve un arrray de articulosDTO*/
    public function buscarPorFecha($fecha)
    {
        $temp = $this->articuloDao->selectByFecha($fecha);
        return $temp;
    }
    /*Llama a afuncion buscarCustom de ArticuloDAO que permite buscar articulos por el nombre del autor y/o la fecha de publicación*/
    public function buscarCustom($nombre, $fecha)
    {
        $temp = $this->buscarCustom($nombre, $fecha);
        return $temp;
    }
}
