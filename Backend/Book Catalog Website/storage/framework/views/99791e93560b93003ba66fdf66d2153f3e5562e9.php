<?php $__env->startSection('body'); ?>
    <div class="container mb-2">
        <div class="container bg-secondary text-white p-1 mb-1">
            <p><?php echo e($publisher->name); ?></p>
            <p>Address - <?php echo e($publisher->address); ?></p>
            <p>Phone - <?php echo e($publisher->phone); ?></p>
            <p>Email - <?php echo e($publisher->email); ?></p>
        </div>
        <?php echo $__env->make('partials.book_cards_pagination', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\2440016804_MIDEXAM_WebProg\2440016804_GiantBookSupplier\resources\views/publisher_detail.blade.php ENDPATH**/ ?>