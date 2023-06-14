<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <?php echo e(Form::label('nombre')); ?>

            <?php echo e(Form::text('nombre', $proyecto->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre'])); ?>

            <?php echo $errors->first('nombre', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('fondos')); ?>

            <?php echo e(Form::text('fondos', $proyecto->fondos, ['class' => 'form-control' . ($errors->has('fondos') ? ' is-invalid' : ''), 'placeholder' => 'Fondos'])); ?>

            <?php echo $errors->first('fondos', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('montoplan')); ?>

            <?php echo e(Form::text('montoplan', $proyecto->montoplan, ['class' => 'form-control' . ($errors->has('montoplan') ? ' is-invalid' : ''), 'placeholder' => 'Montoplan'])); ?>

            <?php echo $errors->first('montoplan', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('montopat')); ?>

            <?php echo e(Form::text('montopat', $proyecto->montopat, ['class' => 'form-control' . ($errors->has('montopat') ? ' is-invalid' : ''), 'placeholder' => 'Montopat'])); ?>

            <?php echo $errors->first('montopat', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('montofp')); ?>

            <?php echo e(Form::text('montofp', $proyecto->montofp, ['class' => 'form-control' . ($errors->has('montofp') ? ' is-invalid' : ''), 'placeholder' => 'Montofp'])); ?>

            <?php echo $errors->first('montofp', '<div class="invalid-feedback">:message</div>'); ?>

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
    </div>
</div><?php /**PATH C:\DesarrolloLaravel\finalproyecto\resources\views/proyecto/form.blade.php ENDPATH**/ ?>