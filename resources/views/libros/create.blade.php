@extends('plantillas.plantilla')
@section('titulo')
    Crear libros
@endsection
@section('cabecera')
    Nuevo Libro
@endsection
@section('contenido')
<form name="crear" action="{{route('libros.create')}}" method="post">
    @csrf
    <div class="row">
      <div class="col">
        <input type="text" class="form-control" placeholder="Titulo" name="titulo" required>
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="ISBN" maxlength="13" name="isbn" required>
      </div>
    </div>
  </form>
  <form>
    <div class="row">
      <div class="col">
        <input type="number" class="form-control" placeholder="PVP(€)" name="pvp" step="0.10" min="0" required>
      </div>
      <div class="col">
        <input type="number" class="form-control" placeholder="stock" name="stock" min="0" step="1">
      </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <label for="ta" class="normal">sinopsis</label>
            <textarea class="form-control" id="a" rows="4" name="sinopsis" required></textarea>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <input type="submit" value="Crear" class="btn btn-info normal">
            <input type="reset" class="ml-3 btn btn-warning normal" value="Limpiar">    
            <a href="{{route('libros.listado')}}" class="btn btn-success normal mt-3">Volver</a>
        </div> 

    </div>
  </form>
@endsection