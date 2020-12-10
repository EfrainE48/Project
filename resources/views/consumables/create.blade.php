@extends('layout.layout')
@section('title','Agregar producto')
@section('content')

<br>

<div class="row">
    <div class="col-sm-10"><h1>Agregar producto</h1></div>
    <div class="col-sm-2">
        <a href="{{ route('consumables.index') }}">
            <button class="btn btn-primary">Cancelar</button>
        </a>
    </div>  
</div>

<div class="jumbotron">
<form method="post" action="{{ route('consumables.store')}}">
@csrf

<div>
    <label for="">Nombre</label>
    <input class="form-control" placeholder="Nombre del artículo" type="text" name="name" id="" maxlength="200" minlength="2" required>
</div>
<div>
    <label for="">Precio</label>
    <input class="form-control" placeholder="Ingrese el precio" type="float" name="price" id="" required>
</div>
<div>
    <label for="">Cantidad</label>
    <input class="form-control" placeholder="Cantidad" type="int" name="quanty" id="" required>
</div>
<br><br>

<input class="btn btn-primary" type="submit" value="Guardar">
<br>

</form>
</div>
@endsection