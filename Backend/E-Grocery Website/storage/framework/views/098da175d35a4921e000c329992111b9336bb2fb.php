<?php $__env->startSection('title', 'Checkout Successful'); ?>

<?php $__env->startSection('main'); ?>

    <div class="text-center">
        <h1 class="text-success text-center justify-center mb-5"><?php echo app('translator')->get('public.successfully made an order'); ?></h1>
        <a href="/home">
            <button class="w-30 btn btn-dark"><?php echo app('translator')->get('public.back to home'); ?></button>
        </a>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Documents\Rio\TI\Binus\Materi Kuliah\Sem 5\Web Programming\LEC\2440016804_FINALEXAM_WebProg\2440016804_E_Grocery\resources\views/others/checkout_success.blade.php ENDPATH**/ ?>