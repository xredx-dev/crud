@extends('layout/plantilla')

@section('contenido')
    <div class="card mt-5">
        <h5 class="card-header">Eliminar una persona!</h5>
        <div class="card-body">

            <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar este registro!!!
                <table class="table">
                    <thead>
                        <th scope="col"class="text-center">Nombre</th>
                        <th scope="col"class="text-center">Apellidos</th>
                        <th scope="col"class="text-center">Fecha de Nacimiento</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">{{ $personas->nombre }}</td>
                            <td class="text-center">{{ $personas->apellidos }}</td>
                            <td class="text-center">{{ $personas->fecha_nacimiento }}</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{ route('personas.destroy', $personas->id) }}" method="POST">
                    @csrf
                    @method('DELETE')


                    <div class="container d-flex justify-content-between">
                        <div>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </div>
                        <div>
                            <a href="{{ route('personas.index') }}" class="btn btn-outline-dark">Regresar</a>
                        </div>
                    </div>
                </form>
            </div>
            </p>

        </div>
    </div>
@endsection
