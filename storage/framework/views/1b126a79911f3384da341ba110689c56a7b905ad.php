<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <h1> The map of the University of Bamenda </h1>
        <ul class="lead">The campus of the UBa is made of:
            <li>a restaurant</li>
            <li>sports infracstuctures</li>
            <li>Hostels</li>
            <li>Administrative blocks</li>
            <li>parking and</li>
            <li>amphitheather</li>
        </ul>
        <div class="img-responsive"><img
                    src="<?php echo e(asset('photos/map.png')); ?>" alt="The map of the University of Bambili" class="img-rounded">
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>