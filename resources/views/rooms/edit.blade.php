@extends('layout.layout')
@section('title','Editar película')
@section('content')

<div class="row">
    <div class="col-sm-10"><h1>Editar sala</h1></div>
    <div class="col-sm-2">
        <a href="{{ route('rooms.index') }}">
            <button class="btn btn-primary">Cancelar</button>
        </a>
    </div>  
</div>

<div class="jumbotron">
    <form method="post" action="{{ route ('rooms.update', $room->id)}}">
    @csrf
    @method('PUT')

        <div>
            <label>Asiento</label>
            <input  type="long"  value="{{ $room->chairs }}" name="chairs" id="" required >
        </div>
        <br>
    
        <div>
            <label for="">Ubicacion</label>
            <input value="{{ $room->location }}" type="text" name="location" id="" maxlength="200" minlength="1" required>
        </div>
        <br>
    
        <div>
            <label for="">Capacidad</label>
            <input value="{{ $room->capacity }}" type="int" name="capacity" id="" required>
        </div>
        <br>
    
        <input class="btn btn-primary" type="submit" value="Guardar">
    </form>
    </div>
    
    @endsection