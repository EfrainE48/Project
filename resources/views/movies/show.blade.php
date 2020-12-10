@extends('layout.layout')
@section('title','Ver detalles de peliculas')    
@section('content')

<div class="row">
<div class="card col-sm text-white bg-secondary mb-3" style="width: 18rem;">
  <br>
    <img src="http://www.tutorialesprogramacionya.com/imagenes/cuadro1.jpg" class="rounded mx-auto d-block" alt="..." style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$movie->name }}</h5> 
      <p class="card-text">{{ $movie->director}}</p>
      <p class="card-text">{{ $movie->synopsis }}</p>
      <p class="card-text">{{ $movie->duration }}</p>
      <p class="card-text">{{ $movie->actors }}</p>
      <p class="card-text">{{ $movie->genere }}</p>

      <form action="{{ route('movies.destroy', $movie->id)}}" method="post">
        <a class="btn btn-success" href="{{ route('movies.index',$movie->id) }}">Volver</a>
        <a class="btn btn-warning" href="{{ route('movies.edit',$movie->id) }}">Editar</a>
        <br><br>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
      </form>
    </div> 
  </div>
</div>

<br>

@endsection