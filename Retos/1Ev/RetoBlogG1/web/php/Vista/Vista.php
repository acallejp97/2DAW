<?php
include_once RAIZ_APLICACION . '/../php/Controlador/ArticuloControler.php';
include_once RAIZ_APLICACION . '/../php/Controlador/ComentarioControler.php';
include_once RAIZ_APLICACION . '/../php/Controlador/comentariosDTO.php';
include_once RAIZ_APLICACION . '/../php/Controlador/articuloDTO.php';
include_once RAIZ_APLICACION . '/../php/Controlador/usuarioDTO.php';
include_once RAIZ_APLICACION . '/../php/Controlador/UsuarioControler.php';

class Vista
{
    private $salida;
    public function __construct()
    {
        $this->salida = "";
    }
    /*Esta función crea un string que luego utilizaremos en index1.php para mostrar una lista de articulos que consigua (todos los articulos o los que filtremos por la fecha) junto con los comentarios asociados*/
    public function mostrarContenido($listadoArticulos)
    {
        $comentario = "";
        $articuloDto = new articuloDTO();
        /*Si recibimos la lista de articulos en un de seleccionar por fecha
         * array asociativo la convertimos en un array de objetos DTO y luego la
         * mostramos
         */
        if ($listadoArticulos != "") {
            $listaArticulos = $listadoArticulos;
        } else {
            $articuloControlador = new ArticuloControler();
            $listaArticulos = $articuloControlador->buscarTodosArticulos();
        }

        $articuloDto = new articuloDTO();
        foreach ($listaArticulos as $articuloDto) {
            if ($articuloDto->getPublicado() == true) {
                $this->salida = $this->salida . "<article><form action=\"../html/verPost.php\" method=\"post\">";
                $var = "<h3> <button type=\"submit\" value=\"titulo\" name=\"titulo\" class=\"btn-link\" ";
                if (!isset($_SESSION["usuario"])) {
                    $var = $var . "disabled";
                }
                $this->salida = $this->salida . $var . " > " . $articuloDto->getTitulo() . " </button></h3>";
                $this->salida = $this->salida . "<input type=\"hidden\" name=\"id_post\" value=\"" . $articuloDto->getIdArticulo() . "\" />";
                $this->salida = $this->salida . "<label name=\"fecha\">" . $articuloDto->getFecha() . "</><br>";
                $this->salida = $this->salida . "<label name=\"texto\">" . $articuloDto->getTexto() . "</>";
                // $comentario = $this->mostrarComentarios($articuloDto->getIdArticulo());
                // if ($comentario != "<h4>Comentarios</h4>") {
                //     $this->salida = $this->salida . $comentario;
                // }
                $this->salida = $this->salida . "</form>";
                $this->salida = $this->salida . "</article>";
            }
            $articuloDto = new articuloDTO();
        }

        return $this->salida;
    }

    public function mostrarUnicoArticulo($idArticulo)
    {
        $articuloControlador = new ArticuloControler();
        $articuloDto = new articuloDTO();

        $articuloDto = $articuloControlador->buscarArticuloPorId($idArticulo);
        if ($articuloDto->getPublicado() == true) {
            $this->salida = $this->salida . "<article> <h3 id=\"TituloPost\">" . $articuloDto->getTitulo() . "</h3><br/>";
            $this->salida = $this->salida . "<input id=\"IdPost\" value=" . $articuloDto->getIdArticulo() . " hidden>";
            $this->salida = $this->salida . "<input id=\"IdEscritor\" value=" . $articuloDto->getIdAutor() . " hidden>";
            $this->salida = $this->salida . "<label id=\"FechaPost\">" . $articuloDto->getFecha() . "</label><br/>";
            $this->salida = $this->salida . "<p id=\"ContenidoPost\">" . $articuloDto->getTexto() . "</p>";
            $comentario = $this->mostrarComentarios($articuloDto->getIdArticulo());
            if ($comentario != "<h4>Comentarios</h4>") {
                $this->salida = $this->salida . $comentario;
            }
            $this->salida = $this->salida . "</article>";
        }
        $articuloDto = new articuloDTO();

        return $this->salida;
    }

    public function mostrarComentarios($idArticulo)
    {
        $salida1 = "<h4>Comentarios</h4>";
        $comentarioCont = new ComentarioControler();
        $listaComentarios = $comentarioCont->buscarComentarioPorID(0, $idArticulo);
        foreach ($listaComentarios as $comentarioDto) {
            $salida1 = $salida1 . "<p>" . $comentarioDto->getComentario() . "</p>";
            $salida1 = $salida1 . "<p>Id Autor: " . $comentarioDto->getIdAutor() . "</p>";
            $salida1 = $salida1 . "<p>" . $comentarioDto->getFecha() . "</p>";
            $salida1 = $salida1 . "<br>";
            $comentarioDto = new comentariosDTO();
        }
        return $salida1;
    }

}
