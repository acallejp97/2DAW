<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $table = "pictures";
    protected $fillable = ['nom_cuadro', 'des_cuadro', 'foto_cuadro'];
}
