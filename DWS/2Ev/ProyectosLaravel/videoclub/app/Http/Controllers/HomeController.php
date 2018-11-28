<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function getHome()
    {
        return redirect()->action('CatalogController@getIndex');
    }
}
