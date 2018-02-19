<?php $__env->startSection('content'); ?>
    <div>
        <h3><?php echo e($school->name); ?> ( <?php echo e($school->abbr); ?>)</h3>
        <div class="col-md-6">
            <img src="" width="200" height="200" alt="">
            <?php echo e($school->description); ?>

        </div>
        <div class="col-md-6">
            <h4>List of departments</h4>
            <table class="table">
                <thead>
                <th>#</th>
                <th>Department</th>
                <th>Abbr</th>
                <th>Description</th>
                </thead>
                <tbody>
                <?php $__currentLoopData = $school->departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($department->id); ?></td>
                        <td><?php echo e($department->name); ?></td>
                        <td><?php echo e($department->abbr); ?></td>
                        <td><?php echo e($department->description); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>