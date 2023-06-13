@extends('layout\planilla')

@section('tituloPagina', 'proyecto final')

@section('contenido')

<div class="card">
    <h5 class="card-header">CRUD </h5>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                @if ($mensaje = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $mensaje }}
                    </div>
                @endif

                
            </div>
        </div>
        <h5 class="card-title text-center">Listado de proyecto en el sistema</h5>
        <p>
            <a href="{{ route("proyecto.create") }}" class="btn btn-primary">
                <span class="fas fa-user-plus"></span> Agregar proyecto
            </a>
        </p>
        <hr>
        <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <th>Nombre del Proyecto</th>
                        <th>Fuente de los Fondos</th>
                        <th>Monto Planificado</th>
                        <th>Monto Patrocinado </th>
                        <th>Monto Fondos Propios</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                    @foreach ($datos as $item)
                        <tr>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->fondos }}</td>
                            <td>{{ $item->montoplan }}</td>
                            <td>{{ $item->montopat }}</td>
                            <td>{{ $item->montofp }}</td>
                            <td>
                                <form action="{{ route("proyecto.edit", $item->id) }}" method="GET">
                                    <button class="btn btn-warning btn-sm">
                                        <span class="fas fa-user-edit"></span>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route("proyecto.show", $item->id) }}" method="GET">
                                    <button class="btn btn-danger btn-sm">
                                        <span class="fas fa-user-times"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <hr>
                
            </div>
            <div class="row">
                <div class="col-sm-12">
                    {{ $datos->links() }}
                </div>
            </div>
        </p>
    </div>
</div>

@endsection 