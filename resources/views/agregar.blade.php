@extends('layout.plantilla')
@section('Nav')
@endsection

@section('contenido')
    <div class="card mt-5 ">
        <h5 class="card-header text-center">Agregar Persona</h5>
        <div class="card-body">
            <p>
                <form action="{{ route('personas.store') }}" method="POST">
                    @csrf

                    <input class="form-control form-control-mb mb-2" type="text" placeholder="Nombre"
                    name="nombre" aria-label=".form-control-ms example" required>

                    <input class="form-control form-control-mb mb-2" type="text" placeholder="Apellidos"
                    name="apellidos" aria-label=".form-control-ms example" required>

                    <input class="form-control form-control-mb mb-2" type="date" placeholder="Fecha de Nacimiento"
                    name="fecha_nacimiento" aria-label=".form-control-ms example" required>

                    <div class="container d-flex justify-content-between">
                        <div>
                            <button type="submit" class="btn btn-primary">Agregar</button>
                        </div>
                        <div>
                            <a href="{{ route('personas.index') }}" class="btn btn-outline-dark">Regresar</a>
                        </div>
                    </div>
                </form>
            </p>
        </div>
    </div>
@endsection
