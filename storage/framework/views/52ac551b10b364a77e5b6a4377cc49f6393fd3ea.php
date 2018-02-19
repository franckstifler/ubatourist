<?php $__env->startSection('content'); ?>
    <div class="container">
        <form action="/hello" method="post">
            <?php echo e(csrf_field()); ?>

            <input type="text" name="username" class="form-control" placeholder="enter your name please">
            <input type="submit" class="btn btn-success">
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>