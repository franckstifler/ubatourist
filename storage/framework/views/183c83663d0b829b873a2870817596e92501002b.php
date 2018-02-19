;

<?php $__env->startSection('content'); ?>

    <div class="container">
        <a href="/school"> les autres ecoles</a>
        <table class="table">
            <thead>
                <th>#</th>
                <th>name</th>
                <th>description</th>
                <th>url</th>
            </thead>
            <tbody>
                <tr>
                    <td> <?php echo e($school->id); ?></td>
                    <td> <?php echo e($school->name); ?></td>
                    <td> <?php echo e($school->description); ?></td>
                    <td> <?php echo e($school->url); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>