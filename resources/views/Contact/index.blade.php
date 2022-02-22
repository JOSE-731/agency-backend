@extends('plantilla')

@section('Barra')
<div class="container">
    <h1 class="mt-4 mb-4">
        <center> Contact </center>
    </h1>
    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Contacto</th>
                        <th scope="col">Email</th>
                        <th>Aciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $iteracion)
                    <tr>
                        <th>{{$iteracion->id}}</th>
                        <td>{{$iteracion->nombre}}</td>
                        <td>{{$iteracion->numero_contacto}}</td>
                        <td>{{$iteracion->email}}</td>
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
