@extends('welcome')

@section('seccion')

<form action="{{url('/usuarios')}}" method="POST">
@csrf
<div class="row">
  <div class="form-group col-4 mx-auto">
  <h3>Contactenos</h3>
    <label for="id">Identificacion</label>
    <input type="text" class="form-control" name='id' id="id" placeholder="Cedula">
  
    <label for="exampleFormControlInput1">Apellido</label>
    <input type="text" class="form-control" value="{{ old('apellido') }}" name='apellido' id="apellido" placeholder="Apellido">
  
    <label for="exampleFormControlInput1">Nombre</label>
    <input type="text" class="form-control" name='nombre' id="exampleFormControlInput2" placeholder="Nombre">
  
  
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" name='correo' id="exampleFormControlInput3" placeholder="name@example.com">
  
      
 
    <button type="submit" class="btn btn-primary my-2 col-3">Send</button>
    <a href="{{route('inicio')}}" class="btn btn-outline-dark col-3">Cancel</a>
    @if (isset($error))
    <div class="">
        <div class="alert  alert-danger alert-dismissible fade show" role="alert">
          Usuario ya existe
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
    </div>
@endif
  </div>
  
</form>

@endsection