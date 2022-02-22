@extends('plantilla')

@section('Barra')
<div class="container">
    <h1 class="mt-4 mb-4">
        <center> Portafolio </center>
    </h1>
    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Categoria</th>
                        <th>Aciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $iteracion)
                    <tr>
                        <th>{{$iteracion->id}}</th>
                        <td>{{$iteracion->titulo}}</td>
                        <td>{{$iteracion->imagen}}</td>
                        <td>{{$iteracion->categoria}}</td>
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
