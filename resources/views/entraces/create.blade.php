@extends('layout.layout')
@section('title','Agregar Entrada')
@section('content')


<div class="row">
    <div class="col-sm-10"><h1>Agregar entrada</h1></div>
    <div class="col-sm-2">
        <a href="{{ route('entraces.index') }}">
            <button class="btn btn-primary">Cancelar</button>
        </a>
    </div>  
</div>

<div class="jumbotron">
<form method="post" action="{{ route('entraces.store')}}">
@csrf

<div>
<label for="">Precio</label>
<input placeholder="Introduzca eñ precio de la entrada" type="float"name="price" id=""  required>
</div>
<br>

<div>
    <label for="">Fecha de entrada</label>
    <input placeholder="Ingrese la hora de entrada"  type="date" name="hourEntrace" id="" required>
</div>
<br>

<div>
    <label for="">Sala</label>
    <input placeholder="Introduzca la hora de salida" type="text" name="salas_id" maxlength="30" minlength="1" required>
</div>
<br>

<input class="btn btn-primary" type="submit" value="Guardar">
</form>
</div>

@endsection