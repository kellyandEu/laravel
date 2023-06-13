@extends('layout/planilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Eliminar una proyecto!</h5>
    <div class="card-body">
        
        <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar este registro!!!

                <table class="table table-sm table-hover table-bordered" style="background-color: white">
                    <thead>
                        <th>Nombre Proyecto</th>
                        <th>Fondos del proyecto</th>
                        <th>Monto Planificado</th>
                        <th>Monto Patrocinio</th>
                        <th>Monto fondos propios</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $proy->nombre }}</td>
                            <td>{{ $proy->fondos}}</td>
                            <td>{{ $proy->montoplan }}</td>
                            <td>{{ $proy->montopat }}</td>
                            <td>{{ $proy->montofp }}</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{ route('proyecto.destroy', $proyecto->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route("proyecto.index") }}" class="btn btn-info" >
                        <span class="fas fa-undo-alt"></span> Regresar
                    </a>
                    <button class="btn btn-danger">
                        <span class="fas fa-user-times"></span> Eliminar 
                    </button>
                </form>
            </div>
        </p>
        
    </div>
</div>
@endsection

