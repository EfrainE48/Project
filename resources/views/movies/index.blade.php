@extends('layout.layout')
@section('title','Peliculas')    
@section('content')
<br> 
<div class="row">
    <div class="col-sm-2"><a href="{{ route('movies.create') }}"><button class="btn btn-primary">Agregar</button></a></div>
    <div class="col-sm-50"><a href="{{ route('entraces.index') }}"><button class="btn btn-secondary">Entradas</button></a></div>
    <div class="col-sm-50"><a href="{{ route('functions.index') }}"><button class="btn btn-dark">Funciones</button></a></div>
    <div class="col-sm-50"><a href="{{ route('movies.index') }}"><button class="btn btn-secondary">Peliculas</button></a></div>
    <div class="col-sm-50"><a href="{{ route('consumables.index') }}"><button class="btn btn-dark">Productos</button></a></div>
    <div class="col-sm-50"><a href="{{ route('rooms.index') }}"><button class="btn btn-secondary">Salas</button></a></div>
    <div class="col-sm-50"><a href="{{ route('entraces.grafica') }}"><button class="btn btn-dark">Gráficar</button></a></div>
  </div>


<h1 class="badage badage-warning text-center ">Peliculas registradas</h1>

   <br>
<div class="card-deck ">
  <div class="card card border-secondary mb-3">
    <img src="http://www.tutorialesprogramacionya.com/imagenes/cuadro1.jpg" class="card-img-top" alt="...">
    <div class="card-body card bg-light mb-3">
      <h5 class="card-title">PROXIMAMENTE</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Diciembre 2020</small></p>
    </div>
  </div>
  <div class="card card border-secondary mb-3">
    <img src="http://www.tutorialesprogramacionya.com/imagenes/cuadro1.jpg" class="card-img-top" alt="...">
    <div class="card-body card bg-light mb-3">
      <h5 class="card-title">PROXIMAMENTE</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Noviembre 2020</small></p>
    </div>
  </div>
  <div class="card card border-secondary mb-3">
    <img src="http://www.tutorialesprogramacionya.com/imagenes/cuadro1.jpg" class="card-img-top" alt="...">
    <div class="card-body card bg-light mb-3">
      <h5 class="card-title">PROXIMAMENTE</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">12 de octubre </small></p>
    </div>
  </div>
</div>
<br>
 


@forelse ($movies as $movie)

<div class="row">
<div class="card col-sm text-white bg-dark card border-primary mb-3" style="width: 18rem;">
  <br>
    <img src="http://www.tutorialesprogramacionya.com/imagenes/cuadro1.jpg" class="rounded mx-auto d-block" alt="..." style="width: 18rem;">
    <div class="card-body ">
      <h5 class="card-title">{{$movie->name }}</h5> 
      <p class="card-text">{{ $movie->synopsis }}</p>
      <p class="card-text text-muted-white">{{ $movie->duration }}</p>
    
      <form action="{{ route('movies.destroy', $movie->id)}}" method="post">
        <a class="btn btn-success" href="{{ route('movies.show',$movie->id) }}">Ver</a>
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
@empty

<h1>No hay peliculas registradas en este momento</h1>
@endforelse

{{ $movies->links() }}

@endsection