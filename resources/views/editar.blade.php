@extends('layout.plantilla')
@section('Nav')
@endsection

@section('contenido')
    <div class="card mt-5 ">
        <h5 class="card-header text-center">Editar Persona</h5>
        <div class="card-body">
            <p>
            <form action="{{ route("personas.update", $personas->id) }}" method="POST">
                @csrf
                @method("PUT")
                <input class="form-control form-control-mb mb-2" type="text" placeholder="Nombre"
                name="nombre" aria-label=".form-control-lg example" required value="{{ $personas->nombre }}">

                <input class="form-control form-control-mb mb-2" type="text" placeholder="Apellidos"
                name="apellidos" aria-label=".form-control-lg example" required value="{{ $personas->apellidos }}">

                <input class="form-control form-control-mb mb-2" type="date" placeholder="Fecha de Nacimiento"
                name="fecha_nacimiento" aria-label=".form-control-lg example" required value="{{ $personas->fecha_nacimiento }}">

                <div class="container d-flex justify-content-between">
                    <div>
                        <button type="submit" class="btn btn-danger">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
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
