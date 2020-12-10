@extends('layout.layout')
@section('title','Productos')
@section('content')

<br>
<div class="p-3 mb-2 bg-dark text-white text-center"><h1>Productos</h1></div>

<table class="table table-bordered table-striped table-dark">
    <thead> 
      <tr class="bg-danger">
        <th scope="col" class="text-center">ID</th>
        <th scope="col" class="text-center">Producto</th>
        <th scope="col" class="text-center">Precio</th>
        <th scope="col" class="text-center">Cantidad</th>
        <th scope="col" class="text-center">Acciones</th>


      </tr>
    </thead>
<tbody>
    @forelse ($consumables as $consumable)    
      <tr>
        <th scope="row">{{$consumable->id}}</th>
        <td>{{$consumable->name}}</td>
        <td class="text-center">{{$consumable->price}}</td>
        <td class="text-center">{{$consumable->quanty}}</td>

        <td class="text-center"><div class="btn-group" role="group" aria-label="Basic example">
          <a href="{{ route('consumables.show',$consumable->id) }}" class="btn btn-success">Ver</a>
          <a href="{{ route('consumables.edit' ,$consumable->id) }}" class="btn btn-warning">Editar</a>          
          <a href="{{ route('consumables.destroy',$consumable->id) }}" class="btn btn-danger">Eliminar</a>
           </div>
        </td>

      </tr>
      @empty 
    <h3>No hay datos</h3>
    @endforelse
    </tbody>
  </table>   

  



 

@endsection