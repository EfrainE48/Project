@extends('layout.layout')
@section('title','Editar productos')
@section('content')

<div class="row">
    <div class="col-sm-10"><h1>Editar productos</h1></div>
    <div class="col-sm-2">
        <a href="{{ route('consumables.index') }}">
            <button class="btn btn-primary">Cancelar</button>
        </a>
    </div>  
</div>

<div class="jumbotron">
    <form method="post" action="{{ route ('consumables.update', $consumable->id)}}">
        @csrf
        @method('PUT')

        
<div>
    <label for="">Nombre</label>
    <input class="" type="text" name="name" id="" value="{{$consumable->name}}" maxlength="200" minlength="2" required>
</div>
<div>
    <label for="">Precio</label>
    <input class="" type="float" name="price" value="{{$consumable->price}}" id="" required>
</div>
<div>
    <label for="">Cantidad</label>
    <input class="" type="int" name="quanty" value="{{$consumable->quanty}}" id="" required>
</div>
<br><br>
<input class="btn btn-primary" type="submit" value="Guardar">
</form>

</div>
@endsection