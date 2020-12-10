@extends('layout.layout')
@section('title','Peliculas')
@section('content')

<div class="p-3 mb-2 bg-dark text-white text-center"><h1>Peliculas</h1></div>

<table class="table table-bordered table-striped table-dark" >

    <thead> 
      <tr class="bg-danger">
        <th scope="col">Titulo</th>
        <th scope="col">Duracion</th>
        <th scope="col">Sinopsis</th>
        <th scope="col">Acciones</th>

      </tr>
    </thead>
<tbody>
    @forelse ($movies as $movie)    
      <tr>
        <th scope="row">{{$movie->name}}</th>
        <td>{{$movie->duration}}</td>
        <td>{{$movie->synopsis}}</td>
        <td><div class="btn-group" role="group" aria-label="Basic example">
          <a href="{{ route('movies.show',$movie->id) }}" class="btn btn-success">Ver</a>
          <a href="{{ route('movies.edit' ,$movie->id) }}" class="btn btn-warning">Editar</a>          
          <a href="{{ route('movies.destroy',$movie->id) }}" class="btn btn-danger">Eliminar</a>
           </div>
        </td>
      </tr>
      @empty 
    <h3>No hay datos</h3>
    @endforelse
    </tbody>
  </table>   

  



 

@endsection