<?php $__env->startSection('body'); ?>
    <div class="container mb-2">
        <?php echo $__env->make('partials.body_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('partials.book_cards_pagination', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\2440016804_MIDEXAM_WebProg\2440016804_GiantBookSupplier\resources\views/homepage.blade.php ENDPATH**/ ?>