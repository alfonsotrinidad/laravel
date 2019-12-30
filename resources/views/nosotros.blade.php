@extends('welcome')

@section('seccion')
<div class="div col-5  mx-auto">
<h3>Usuarios registrados</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Apellido</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
    </tr>
  </thead>
  <tbody>
  @foreach($usuarios as $usuario)
    <tr>
      <th scope="row">{{$usuario->id}}</th>
      <td>{{$usuario->apellido}}</td>
      <td>{{$usuario->nombre}}</td>
      <td>{{$usuario->correo}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection