@extends('plantilla')

@section('Barra')
<div class="container">
    <h1 class="mt-4 mb-4">
        <center> Team </center>
    </h1>
    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Profesion</th>
                        <th scope="col">Imagen</th>
                        <th>Aciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $iteracion)
                    <tr>
                        <th>{{$iteracion->id}}</th>
                        <td>{{$iteracion->nombre}}</td>
                        <td>{{$iteracion->profesion_perfil}}</td>
                        <td>{{$iteracion->imagen}}</td>
                        <td>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
              {{$data->links()}}
            </div>
    </div>
</div>
@endsection
