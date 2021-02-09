@extends('layouts.app')
@section('title','lista de usuarios')

@section('content')
    <br>
    <br>
    <a href="{{route('usuario.crear')}}"class="btn btn-primary">Crear Nuevo Usuario</a>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>NOMBRE </th>
                <th>APELLIDO</th>
                <th>CORREO</th>
                <th>TELEFONO</th>
                <th>ACCIONES</th>

            </tr>
            </thead>
            <tbody>
            @foreach($usuarios as $usuario)
                 <tr>
                     <td>{{$usuario->Nombres}}</td>
                     <td>{{$usuario->apellidos}}</td>
                     <td>{{$usuario->correo}}</td>
                     <td>{{$usuario->telefono}}</td>
                     <td>
                         <a href="" class="btn btn-danger btn-sm">Eliminar</a>
                         <a href=""class="btn btn-info btn-sm"> Ver Detalles</a>



                     </td>

                 </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
