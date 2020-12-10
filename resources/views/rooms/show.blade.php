@extends('layout.layout')
@section('title','Detalles de salas')
@section('content')

  
  <div class="row">
  <div class="card col-sm text-white bg-dark" style="width: 18rem;">
      <img  class="card-img-top" src="http://www.tutorialesprogramacionya.com/imagenes/cuadro1.jpg" alt="---">
      <br>
      <div class="card-body">
        <h5 class="card-title">Asiento: {{$room->chairs }}</h5>
        <p class="card-text">Capacidad: {{$room->capacity}} </p>
        <p class="card-text text-muted-white">Ubicacion: {{ $room->location}}</p>
  
        <form action="{{ route('rooms.destroy', $room->id)}}" method="post">
          <a class="btn btn-success" href="{{ route('rooms.index',$room->id) }}">Volver</a>
          <a class="btn btn-warning" href="{{ route('rooms.edit',$room->id) }}">Editar</a>
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