@extends('layout.layout')
@section('title','Peliculas')    
@section('content')


<div class="row">
    <div class="col-sm-10"><h1>Editar funciones</h1></div>
    <div class="col-sm-2">
        <a href="{{ route('functions.index') }}">
            <button class="btn btn-primary">Cancelar</button>
        </a>
    </div>  
</div>


<div class="jumbotron">
    <form method="post" action="{{ route('functions.update', $function->id)}}">
        @csrf
        @method('PUT')
    
    <div>
        <label for="">Inicio</label>
        <input  type="date" name="start"  value="{{$function->start}}" id="" required>
    </div>
    <br>
    
    <div>
        <label for="">Fin</label>
        <input  type="date"  name="end"  value="{{$function->end}}" id=""required>
    </div>
    <br>
    
    <div>
        <label for="">Disponibles</label>
        <input  placeholder="Asientos disponibles"  value="{{$function->available}}" type="int" name="available" id="" required>
    </div>
    <br>
    
    <div>
        <label for="">Tipo</label>
        <select required name="type" id="" required>
            <option  value="{{$function->type}}">{{$function->type}}</option>
            <option value="Mañana">Mañana</option>
            <option value="Tarde">Tarde</option>
            <option value="Noche">Noche</option>
        </select>
    </div>
    <br>
    
    <input class="btn btn-primary" type="submit" value="Guardar">
    
    </form>
    </div>
    
    @endsection

