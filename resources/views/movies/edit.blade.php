@extends('layout.layout')
@section('title','Editar película')
@section('content')

<div class="row">
    <div class="col-sm-10"><h1>Editar película</h1></div>
    <div class="col-sm-2">
        <a href="{{ route('movies.index') }}">
            <button class="btn btn-primary">Cancelar</button>
        </a>
    </div>  
</div>

<div class="jumbotron">
    <form method="post" action="{{ route ('movies.update', $movie->id)}}">
    @csrf
    @method('PUT')

    <div>
        <label for="" class="for">Pelicula:</label>
        <input class="" type="text" name="name" value="{{$movie->name}}"  id="" required maxlength="100">
    </div>
    <div>
        <label for="" class="">Sinopsis:</label>
        <textarea class="form-control" name="synopsis" id="" cols="30" rows="5">{{$movie->synopsis}}</textarea>
    </div>
    <div>
        <label for="">Categoria:</label>
        <select class="" name="category" id="" required>
            <option value="{{$movie->category}}">{{$movie->name}}</option>
            <option value="Estrenos">Estrenos</option>
            <option value="Top10">Top10</option>
            <option value="Internacional">internacional</option>
            <option value="Nacional">Nacional</option>
        </select>            
    </div>
    <div>
        <label for="">Director:</label>
        <input class="" type="text" name="director" id="" value="{{ $movie->director}}" required maxlength="100">
    </div>
     <div>
        <label for="">Duración:</label>
        <input class="" type="text" name="duration" value="{{ $movie->duration}}" id="" required maxlength="30">
    </div>   
    <div>
        <label for="">Actores:</label>
        <input class="form-control" type="text" name="actors" value="{{ $movie->actors}}" id="" required maxlength="30">
    </div>   
    <div>
        <label for="">Género:</label>
         <select class="" name="genere" id="" required>
         <option value="{{$movie->genere}}">{{$movie->genere}}</option>
         <option value="Ciencia Ficción">Ciencia Ficción</option>
         <option value="Acción">Acción</option>
         <option value="Terror">Terror</option>
         <option value="Infantil">Infantil</option>
         <option value="Romance">Romance</option>
        </select>
    </div>
    <br><br>
    <input class="btn btn-primary" type="submit" value="Guardar cambios">

</form>
</div>

@endsection