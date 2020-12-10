@extends('layout.layout')
@section('title','Salas')    
@section('content')

<br>

<div class="row">
    <div class="col-sm-10"><h1>Agregar Sala</h1></div>
    <div class="col-sm-2">
        <a href="{{ route('rooms.index') }}">
            <button class="btn btn-primary">Cancelar</button>
        </a>
    </div>  
</div>

<div class="jumbotron">
<form method="post" action="{{route('rooms.store')}}">

    @csrf
    <div>
        <label for="">Asiento</label>
        <input placeholder="Ingrese el numero de asiento" type="int " name="chairs" id="" required >
    </div>
    <br>

    <div>
        <label for="">Ubicacion</label>
        <input placeholder="Ingrese la ubicacion" type="text" name="location" id="" maxlength="200" minlength="1" required>
    </div>
    <br>

    <div>
        <label for="">Capacidad</label>
        <input type="int" name="capacity" id="" required>
    </div>
    <br>

    <input class="btn btn-primary" type="submit" value="Guardar">
</form>
</div>

@endsection