<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = "authors";
    protected $fillable = ['nom_autor', 'des_autor'];
}
