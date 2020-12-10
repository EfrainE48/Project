@extends('layout.layout')
@section('title','Agregar película')
@section('content')

<br>

<div class="row">
    <div class="col-sm-10"><h1>Agregar funcion</h1></div>
    <div class="col-sm-2">
        <a href="{{ route('functions.index') }}">
            <button class="btn btn-primary">Cancelar</button>
        </a>
    </div>  
</div>

<div class="jumbotron">
<form method="post" action="{{ route('functions.store')}}">
@csrf

<div>
    <label for="">Inicio</label>
    <input class="from-control" type="date" name="start" id="" required>
</div>
<br>

<div>
    <label for="">Fin</label>
    <input class="from-control" type="date"  name="end" id=""required>
</div>
<br>

<div>
    <label for="">Disponibles</label>
    <input class="from-control" placeholder="Asientos disponibles" type="int" name="available" id="" required>
</div>
<br>

<div>
    <label for="">Tipo</label>
    <select required name="type" id="">
        <option value="">Seleccione el tipo</option>
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