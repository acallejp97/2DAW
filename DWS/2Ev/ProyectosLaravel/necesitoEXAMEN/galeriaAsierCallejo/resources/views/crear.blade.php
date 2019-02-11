@extends('layouts.master') 
@section('content')
<div>
<h3 class="titulo">Crear un cuadro</h3>
    <form method="POST" action="{{url("subirCuadro")}}" enctype='multipart/form-data'>
        @csrf

        <h3>Nombre</h3>
        <input type=text name="nombre">

        <h3>Subir fichero</h3>
        <input type="file" name="image" />

        <h3>Descripcion</h3>
        <input type=text name="descripcion">

        <h3>Autor</h3>
        <select name="autor">
@foreach ($autores as $autor)
    <option value="{{$autor['id']}}">{{$autor['nom_autor']}}</option>
@endforeach
</select>
<br/>
        <button type="submit">Añadir cuadro</button>
    </form>
</div>
@endsection