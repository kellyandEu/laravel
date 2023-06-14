<?php $__env->startSection('template_title'); ?>
    <?php echo e($proyecto->name ?? "{{ __('Show') Proyecto"); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title"><?php echo e(__('Show')); ?> Proyecto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="<?php echo e(route('proyecto.index')); ?>"> <?php echo e(__('Back')); ?></a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            <?php echo e($proyecto->nombre); ?>

                        </div>
                        <div class="form-group">
                            <strong>Fondos:</strong>
                            <?php echo e($proyecto->fondos); ?>

                        </div>
                        <div class="form-group">
                            <strong>Montoplan:</strong>
                            <?php echo e($proyecto->montoplan); ?>

                        </div>
                        <div class="form-group">
                            <strong>Montopat:</strong>
                            <?php echo e($proyecto->montopat); ?>

                        </div>
                        <div class="form-group">
                            <strong>Montofp:</strong>
                            <?php echo e($proyecto->montofp); ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\DesarrolloLaravel\finalproyecto\resources\views/proyecto/show.blade.php ENDPATH**/ ?>