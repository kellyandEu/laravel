@extends('layouts.app')

@section('template_title')
    Proyecto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Proyecto') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('proyecto.pdf') }}" class="btn btn-primary btn-sm "  data-placement="left">
                                  {{ __('PDF') }}
                                </a>
                              
                            &nbsp;
                                <a href="{{ route('proyecto.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Fondos</th>
										<th>Montoplan</th>
										<th>Montopat</th>
										<th>Montofp</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proyectos as $proyecto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $proyecto->nombre }}</td>
											<td>{{ $proyecto->fondos }}</td>
											<td>{{ $proyecto->montoplan }}</td>
											<td>{{ $proyecto->montopat }}</td>
											<td>{{ $proyecto->montofp }}</td>

                                            <td>
                                                <form action="{{ route('proyecto.destroy',$proyecto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('proyecto.show',$proyecto->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('proyecto.edit',$proyecto->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $proyectos->links() !!}
            </div>
        </div>
    </div>
@endsection
