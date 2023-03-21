@extends('layout.plantilla')
@section('Nav')
    <div class="row mb-5">
        <nav class="navbar navbar-dark  navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <span class="navbar-text text-light fs-3 ms-5">
                    CRUD 
                </span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="me-5">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page"
                                    href=" {{ route('personas.index') }} ">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href=" {{ route('personas.create') }} ">Crear</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
@endsection
@section('contenido')
    <div class="card">
        <h5 class="card-header text-center">CRUD en laravel 8</h5>
        <div class="card-body">
            <h5 class="card-title text-center">Personitas de la casa</h5>
            <p class="card-text">
            <div class="table table-responcive">
                <table class="table table-secondary table-striped">
                    <thead>
                        <tr>
                            <th scope="col"class="text-center">Nombre</th>
                            <th scope="col"class="text-center">Apellidos</th>
                            <th scope="col"class="text-center">Fecha de Nacimiento</th>
                            <th scope="col"class="text-center">Botones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $personas)
                            <tr>

                                <td>{{ $personas->nombre }}</td>
                                <td>{{ $personas->apellidos }}</td>
                                <td>{{ $personas->fecha_nacimiento }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col">
                                            <form action="{{ route('personas.edit', $personas->id) }}" method="GET">
                                                <button type="submit" class="btn btn-warning btn-sm"> Editar </button>
                                            </form>
                                        </div>
                                        <div class="col">
                                            <form action="{{ route('personas.show', $personas->id) }}" method="GET">
                                                <button type="submit" class="btn btn-danger btn-sm"> Eliminar </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row ">
                <div class="col-sm-12">
                    {{ $data->links() }}
                </div>

            </div>
            </p>

        </div>
    </div>
@endsection
