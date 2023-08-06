<?php $__env->startSection('title', 'Products'); ?>
<?php $__env->startSection('main'); ?>
  <div class="container">
    <div class="row">
        <div class="col-4 d-flex flex-column align-items-center">
            <h2 class="fw-bold"><u><?php echo e($item->item_name); ?></u></h1>
            <img class="w-70 h-70 ratio ratio-1x1" src="<?php echo e(url('storage/'.$item->item_picture_link)); ?>"
            style="aspect-ratio: 1; object-fit: cover;">
        </div>
        <div class="col-8 d-flex flex-column justify-content-center">
            <h3 class="fw-semibold mb-3">Price: Rp. <?php echo e($item->price); ?>,-</h3>
            <p class="mb-3"><?php echo e($item->item_desc); ?></p>
            <form action="<?php echo e(route('add_to_cart')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input class="form-control visually-hidden" name="item_id" type="text"
                    value="<?php echo e($item->id); ?>">
                <input class="form-control visually-hidden" name="item_price" type="text"
                    value="<?php echo e($item->price); ?>">
                <button class="btn btn-outline-dark mt-auto" type="submit">
                    <?php echo app('translator')->get('public.add to cart'); ?>
                </button>
            </form>
        </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Documents\Rio\TI\Binus\Materi Kuliah\Sem 5\Web Programming\LEC\2440016804_FINALEXAM_WebProg\2440016804_E_Grocery\resources\views/main_pages/item_detail.blade.php ENDPATH**/ ?>