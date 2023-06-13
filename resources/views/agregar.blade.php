@extends('layout/planilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Agregar nuevo proyecto</h5>
    <div class="card-body">
        
        <p class="card-text">
            <form action="{{ route('proyecto.store') }}" method="POST">
                @csrf
                <label for="">Nombre del Proyecto</label>
                <input type="text" name="nombre" class="form-control" required>
                <label for="">fuente de los fondos</label>
                <input type="text" name="fondos" class="form-control" required>
                <label for="">Monto Planificado</label>
                <input type="text" name="montoplan" class="form-control" required>
                <label for="">Monto Patrocinado</label>
                <input type="text" name="montopat" class="form-control" required>
                <label for="">Monto Fondos Propios</label>
                <input type="text" name="montofp" class="form-control" required>
                <br>
                <a href="{{ route("proyecto.index") }}" class="btn btn-info" >
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-primary">
                    <span class="fas fa-user-plus"></span> Agregar
                </button>
                
            </form>
        </p>
        
    </div>
</div>
@endsection

