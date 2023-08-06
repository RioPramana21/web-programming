<?php $__env->startSection('title', 'Starting Page'); ?>
<?php $__env->startSection('main'); ?>
    <div class="container">
        <div class="container text-black p-1 mb-1">
            <h2 class="d-flex justify-content-center py-5 my-5">
                <?php echo app('translator')->get('public.find and buy your grocery here!'); ?>
            </h2>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Documents\Rio\TI\Binus\Materi Kuliah\Sem 5\Web Programming\LEC\2440016804_FINALEXAM_WebProg\2440016804_E_Grocery\resources\views/test.blade.php ENDPATH**/ ?>