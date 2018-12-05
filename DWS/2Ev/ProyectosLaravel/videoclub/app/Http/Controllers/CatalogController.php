<?php

namespace App\Http\Controllers;

class CatalogController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('domingo');
    }

    public function getIndex()
    {

        return view('catalog.index', array('arrayPeliculas' => $this->arrayPeliculas));
    }

    public function getShow($id)
    {
        return view('catalog.show', $this->arrayPeliculas[$id]);
    }

    public function getCreate()
    {
        return view('catalog.create');
    }

    public function getEdit($id)
    {
        return view('catalog.edit', array('id' => $id));
    }
}
