<?php $__env->startSection('content'); ?>
    <div class="container">
        <form action="/school" method="post">
            <?php echo e(csrf_field()); ?>

            <input type="text" name="name" class="form-control" placeholder="School name">
            <input type="text" name="abbr" class="form-control" placeholder="School abbr">
            <input type="text" name="description" class="form-control" placeholder="School description">
            <input type="text" name="url" class="form-control" placeholder="School url">
            <input type="submit" class="btn btn-success">
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>