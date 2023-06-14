<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo e(public_path('css/app.css')); ?>">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    </head>
    <body>
        
        <h1>Informe en formato PDF </h1>

        <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Fondos</th>
										<th>Montoplan</th>
										<th>Montopat</th>
										<th>Montofp</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $proyectos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proyecto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                           
                                            
											<td><?php echo e($proyecto->nombre); ?></td>
											<td><?php echo e($proyecto->fondos); ?></td>
											<td><?php echo e($proyecto->montoplan); ?></td>
											<td><?php echo e($proyecto->montopat); ?></td>
											<td><?php echo e($proyecto->montofp); ?></td>

                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>

    </body>
</html><?php /**PATH C:\DesarrolloLaravel\finalproyecto\resources\views/proyecto/pdf.blade.php ENDPATH**/ ?>