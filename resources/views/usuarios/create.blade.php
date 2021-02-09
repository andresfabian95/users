
@extends('layouts.app')
@section('title','crear nuevo usuario')

@section('content')


    <div class="row">
        <div class="col-md-6  offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('usuario.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                 <label for="">Nombres</label>
                                <input type="text"name="Nombres" class="form-control">
                            </div>
                            <div class="form-group">
                                 <label for="">apellidos</label>
                                <input type="text"name="apellidos" class="form-control">
                            </div>
                            <div class="form-group">
                                 <label for="">correo</label>
                                <input type="text"name="correo" class="form-control">
                            </div>
                            <div class="form-group">
                                 <label for="">Telefono</label>
                                <input type="text"name="telefono" class="form-control">
                            </div>


                            <hr>

                              <button class="btn btn-primary" type="submit"> Crear</button>

                        <a href="{{route('usuario.index')}}">Cancelar</a>

                        </form>
                    </div>
                </div>

        </div>

   </div>







@endsection

