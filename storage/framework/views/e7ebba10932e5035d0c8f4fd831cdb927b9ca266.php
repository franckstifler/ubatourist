<?php $__env->startSection('content'); ?>
    <div class="container">
        <a class="btn btn-default" href="school/create">Create School</a>
        <table class="table">
            <thead>
                <th>#</th>
                <th>Abbr</th>
                <th>Name</th>
                <th>Description</th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $schools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $school): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><a href=<?php echo e("school/$school->id"); ?>><?php echo e($school->id); ?></a></td>
                        <td><?php echo e($school->abbr); ?></td>
                        <td><?php echo e($school->name); ?></td>
                        <td><?php echo e($school->description); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>