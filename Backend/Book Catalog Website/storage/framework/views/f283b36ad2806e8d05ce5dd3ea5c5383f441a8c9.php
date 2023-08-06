<?php $__env->startSection('body'); ?>
    <div class="container mb-2">
        <?php echo $__env->make('partials.body_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="container">
            <?php if($publishers->count()): ?>
                <div class="row">
                    <?php $__currentLoopData = $publishers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publisher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3">
                        <div class="card mt-2">
                            <img src="<?php echo e(asset($publisher->image)); ?>" class="card-img-top" alt="<?php echo e($publisher->name); ?>">
                            <div class="card-body">
                                <h3 class="card-title fs-4"><?php echo e($publisher->name); ?></h3>
                                <p class="card-text mb-0">Address:</p>
                                <p class="card-text mt-0 mb-1"><?php echo e($publisher->address); ?></p>
                                <a href="<?php echo e(route('get_publisher_detail', ['id' => $publisher->id])); ?>" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php else: ?>
                <p class="text-center fs-3">There is no publisher...</p>
            <?php endif; ?>
            
            <div class="mt-3 d-flex justify-content-center">
                <?php echo e($publishers->links()); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\2440016804_MIDEXAM_WebProg\2440016804_GiantBookSupplier\resources\views/publishers.blade.php ENDPATH**/ ?>