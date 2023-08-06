<?php $__env->startSection('body'); ?>
    <div class="container mb-2">
        <?php echo $__env->make('partials.body_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="card mt-2">
            <img src="<?php echo e(asset($book->image)); ?>" class="card-img-top" alt="<?php echo e($book->name); ?>">
            <div class="card-body">
                <p class="card-text">Title : <?php echo e($book->title); ?></p>
                <p class="card-text">Author : <?php echo e($book->author); ?></p>
                <p class="card-text">Publisher : <?php echo e($book->publisher->name); ?></p>
                <p class="card-text">Year : <?php echo e($book->year); ?></p>
                <p class="card-text">Synopsis :</p>
                <p class="card-text"><?php echo e($book->synopsis); ?></p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\2440016804_MIDEXAM_WebProg\2440016804_GiantBookSupplier\resources\views/book_detail.blade.php ENDPATH**/ ?>