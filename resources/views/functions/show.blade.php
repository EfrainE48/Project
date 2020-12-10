@extends('layout.layout')
@section('title','Detalles de las funciones')    
@section('content')

<div class="row">
<div class="card col-sm text-white bg-dark" style="width: 18rem;"><br>
    <img src="http://www.tutorialesprogramacionya.com/imagenes/cuadro2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"> Inicio: {{$function->start }}</h5>
      <p class="card-text"> Fin: {{$function->end}} hrs.</p>
      <p class="card-text text-muted-white">Disponibles: {{$function->available}}</p>

      <form action="{{ route('functions.destroy', $function->id)}}" method="post">
        <a class="btn btn-success" href="{{ route('functions.index',$function->id) }}">Volver</a>
        <a class="btn btn-warning" href="{{ route('functions.edit',$function->id) }}">Editar</a>
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