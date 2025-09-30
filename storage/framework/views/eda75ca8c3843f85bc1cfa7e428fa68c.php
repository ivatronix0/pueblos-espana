<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>API test</title>

        <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
    </head>
    <body>
        <div class="container my-5">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php $__currentLoopData = $provinciasArray; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provincia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                   
                        <p class="card-text"><?php echo e($provincia['title']); ?></p>
                    
                  
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </body>
</html><?php /**PATH C:\xampp\htdocs\projecte\resources\views/main.blade.php ENDPATH**/ ?>