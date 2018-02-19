<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="jumbotron">
            <?php if($username == 'verdiane'): ?>
                <p>A special hello from verdiane!!!</p>
            <?php endif; ?>
            <h3>Hello my friend <?php echo e($username); ?></h3>
            <?php $__currentLoopData = $numbers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $number): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h3><?php echo e($number); ?></h3>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>