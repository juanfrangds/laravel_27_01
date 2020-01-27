@extends('plantillas.plantilla')
@section('titulo')
    Listado libros
@endsection
@section('cabecera')
    LIBROS DISPONIBLES
@endsection
@section('contenido')
@if (Session::has('mensaje'))
    <div class="container mt-3 mb-3 alert-danger normal">
      {{Session('mensaje')}}
    </div>
@endif
<a href="{{route('libros.create')}}" class="btn btn-success normal">Crear Libro</a>
<table class="table table-striped table-dark normal">
    <thead>
      <tr>
        <th scope="col">Codigo</th>
        <th scope="col">Titulo</th>
        <th scope="col">Precio</th>
        <th scope="col">ISBN</th>
        <th scope="col">Stock</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($libros as $item)
      <tr>
      <th scope="row">{{$item->id}}</th>
        <td>{{$item->titulo}}</td>
        <td>{{$item->sinopsis}}</td>
        <td>{{$item->pvp}}</td>
        <td>{{$item->isbn}}</td>
        <td>{{$item->stock}}</td>
        <td>

            <form action="{{route('libros.destroy', $item)}}" name="borrar" method="POST" style="white-space: nowrap">
                @csrf
                @method('DELETE')
                <a href="{{route('libros.edit',$item)}}" class="btn btn-warning normal">Edit</a>
                <input type="submit" value="borrar" class='btn btn-danger normal'>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{$libros->links()}}

@endsection
