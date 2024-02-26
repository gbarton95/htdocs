

<?php echo $__env->make("layouts.navegadorBoot", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection("cabecera"); ?>
    <h1>Galería</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("infoGeneral"); ?>


    <?php if(count($alumnos)): ?>
        <table width="50%" border="1">
            <?php $__currentLoopData = $alumnos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alumno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($alumno); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

    <?php else: ?>
        <?php echo e("Sin alumnos"); ?>


    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("pie"); ?>
<?php echo $__env->make("layouts.miplantilla", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\proyectoPrimero\resources\views/galeria.blade.php ENDPATH**/ ?>