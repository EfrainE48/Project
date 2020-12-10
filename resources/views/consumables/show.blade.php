@extends('layout.layout')
@section('title','Ver de los productos')    
@section('content')

<div class="row">
<div class="card col-sm text-white bg-secondary mb-3" style="width: 18rem;">
  <br>
    <img src="http://www.tutorialesprogramacionya.com/imagenes/cuadro1.jpg" class="rounded mx-auto d-block" alt="..." style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$consumable->name }}</h5> 
      <p class="card-text">{{ $consumable->price}}</p>
      <p class="card-text">{{ $consumable->quanty }}</p>
      
      <form action="{{ route('consumables.destroy', $consumable->id)}}" method="post">
        <a class="btn btn-success" href="{{ route('consumables.index',$consumable->id) }}">Volver</a>
        <a class="btn btn-warning" href="{{ route('consumables.edit',$consumable->id) }}">Editar</a>
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