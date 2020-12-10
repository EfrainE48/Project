@extends('layout.layout')
@section('title','Agregar Entrada')
@section('content')


<div class="row">
    <div class="card col-sm text-white bg-secondary mb-3" style="width: 18rem;">
        <br>
        <img src="http://www.tutorialesprogramacionya.com/imagenes/cuadro1.jpg" class="rounded mx-auto d-block" alt="..." style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$entrace->price }}</h5> 
          <p class="card-text">{{ $entrace->hourEntrace}}</p>
          <p class="card-text">{{ $entrace->salas_id }}</p>

          <form action="{{ route('entraces.destroy', $entrace->id)}}" method="post">
            <a class="btn btn-success" href="{{ route('entraces.index',$entrace->id) }}">Volver</a>
            <a class="btn btn-warning" href="{{ route('entraces.edit',$entrace->id) }}">Editar</a>
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