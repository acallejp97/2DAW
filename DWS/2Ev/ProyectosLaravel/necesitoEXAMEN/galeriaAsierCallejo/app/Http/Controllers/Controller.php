<?php

namespace App\Http\Controllers;

use App\Author;
use App\Picture;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Notification;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function inicio()
    {
        $ultimo_cuadro = Picture::where('id', Picture::max('id'))->first();
        return view('inicio')->with('ultimo_cuadro', $ultimo_cuadro);
    }

    public function mostrarGaleria()
    {
        $cuadros = Picture::all();
        $autores = Author::all();
        $galeria = ['cuadros' => $cuadros, 'autores' => $autores];
        return view('galeria')->with('galeria', $galeria);

    }

    public function crearCuadro()
    {
        $autores = Author::all();
        return view('crear')->with('autores', $autores);
    }

    public function subirCuadro(Request $request)
    {
        $imagen = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('images', $imagen);
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $id_autor = $_POST['autor'];
        $nuevo_cuadro = new Picture;
        $nuevo_cuadro->insert(['nom_cuadro' => $nombre, 'des_cuadro' => $descripcion, 'autor' => $id_autor, 'foto_cuadro' => $imagen]);
        Notification::success('Has creado el cuadro correctamente');
        return redirect('/');
    }
}
