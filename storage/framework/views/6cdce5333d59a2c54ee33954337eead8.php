<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Pueblos')); ?></div>

                    <div class="card-body">
                        <?php $__currentLoopData = $pueblos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pueblo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="pueblo">
                                <h2><?php echo e($pueblo->Mun); ?></h2>
                                <p><?php echo e($pueblo->Descripcion); ?></p>
                                <img src="<?php echo e($pueblo->Foto); ?>" alt="<?php echo e($pueblo->Mun); ?>">
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projecte\resources\views/welcome.blade.php ENDPATH**/ ?>