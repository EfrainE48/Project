@extends('layout.layout')
@section('title','Agregar Entrada')
@section('content')

<br>

<div class="row">
    <div class="col-sm-10"><h1>Editar entrada</h1></div>
    <div class="col-sm-2">
        <a href="{{ route('entraces.index') }}">
            <button class="btn btn-primary">Cancelar</button>
        </a>
    </div>  
</div>

<div class="jumbotron">
<form method="post"action="{{ route ('entraces.update', $entrace->id)}}">
    @csrf
    @method('PUT')

<div>
<label for="">Precio</label>
<input  type="float"name="price" value="{{$entrace->price}} "id=""  required>
</div>
<br>

<div>
    <label for="">Fecha y hora de entrada</label>
    <input   type="datetime" name="hourEntrace" value="{{$entrace->hourEntrace}}" id="" required>
</div>
<br>

<div>
    <label for="">Sala</label>
    <input  type="text" value="{{$entrace->salas_id}}" name="salas_id" maxlength="30" minlength="1" required>
</div>
<br>

<input class="btn btn-primary" type="submit" value="Guardar">
</form>
</div>

@endsection