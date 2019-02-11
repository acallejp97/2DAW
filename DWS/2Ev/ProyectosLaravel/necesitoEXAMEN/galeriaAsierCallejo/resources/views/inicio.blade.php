@extends('layouts.master') 
@section('content')
<h3 class="titulo">QUIENES SOMOS</h3>
<div>
    <p>Esta es la pagina web de una galeria de obras de arte, con la que se pretende gestionar las obras que se expondran en ella</p>

<p>Último cuadro {{$ultimo_cuadro['nom_cuadro']}}</p>
<br/>

<img src="{{asset('images')."/".$ultimo_cuadro['foto_cuadro']}}" class="inicio">

    
</div>


@endsection