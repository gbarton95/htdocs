<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Veamos</title>
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
</head>
<body>
   
    <?php echo $__env->yieldContent('cabecera'); ?>

    <?php echo $__env->make("layouts.navegadorBoot", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('infoGeneral'); ?>
 
    <?php echo $__env->yieldContent('pie'); ?>
    <p>Esto es un pie general para todas las páginas</p>


</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\proyectoPrimero\resources\views/layouts/miplantilla.blade.php ENDPATH**/ ?>