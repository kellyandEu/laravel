<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $proyecto->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fondos') }}
            {{ Form::text('fondos', $proyecto->fondos, ['class' => 'form-control' . ($errors->has('fondos') ? ' is-invalid' : ''), 'placeholder' => 'Fondos']) }}
            {!! $errors->first('fondos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('montoplan') }}
            {{ Form::text('montoplan', $proyecto->montoplan, ['class' => 'form-control' . ($errors->has('montoplan') ? ' is-invalid' : ''), 'placeholder' => 'Montoplan']) }}
            {!! $errors->first('montoplan', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('montopat') }}
            {{ Form::text('montopat', $proyecto->montopat, ['class' => 'form-control' . ($errors->has('montopat') ? ' is-invalid' : ''), 'placeholder' => 'Montopat']) }}
            {!! $errors->first('montopat', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('montofp') }}
            {{ Form::text('montofp', $proyecto->montofp, ['class' => 'form-control' . ($errors->has('montofp') ? ' is-invalid' : ''), 'placeholder' => 'Montofp']) }}
            {!! $errors->first('montofp', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>