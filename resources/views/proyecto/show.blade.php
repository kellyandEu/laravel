@extends('layouts.app')

@section('template_title')
    {{ $proyecto->name ?? "{{ __('Show') Proyecto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Proyecto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proyecto.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $proyecto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fondos:</strong>
                            {{ $proyecto->fondos }}
                        </div>
                        <div class="form-group">
                            <strong>Montoplan:</strong>
                            {{ $proyecto->montoplan }}
                        </div>
                        <div class="form-group">
                            <strong>Montopat:</strong>
                            {{ $proyecto->montopat }}
                        </div>
                        <div class="form-group">
                            <strong>Montofp:</strong>
                            {{ $proyecto->montofp }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
