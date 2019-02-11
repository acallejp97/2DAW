@extends('layouts.master') 

@section('content')
<h3 class="titulo" >NUESTRAS OBRAS</h3>

<div class=galeria>
     @foreach($galeria['cuadros'] as $cuadro)


<div>
    <img src="{{asset('images') . "/" . $cuadro['foto_cuadro']}}" style=" height:200px; width: 200px;">
    <br/>
    <p>{{$cuadro['nom_cuadro']}}</p>

    @foreach($galeria['autores'] as $autor) @if($cuadro['autor']==$autor['id'])
    <p>Autor:{{$autor['nom_autor']}}</p>
    @endif @endforeach
</div>



@endforeach
</div>
@endsection