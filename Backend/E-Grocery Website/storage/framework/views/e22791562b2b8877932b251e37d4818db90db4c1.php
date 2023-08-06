<?php $__env->startSection('title', 'Home'); ?>
<?php $__env->startSection('main'); ?>
    <div class="d-flex justify-content-between align-items-center mb-3 flex-row">
        <h1 class="fw-bold fs-2 mb-0"><?php echo app('translator')->get('public.our products'); ?></h1>
    </div>

    <div class="items row row-cols-2 row-cols-sm-3 row-cols-lg-4 g-3 mb-3">
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col">
                <div class="card position-relative h-100 shadow-sm">
                    <a href="<?php echo e("/home/{$item->id}"); ?>">
                        <img class="w-100 h-100 ratio ratio-1x1" src="<?php echo e(url('storage/'.$item->item_picture_link)); ?>" alt=""
                            style="aspect-ratio: 1; object-fit: cover;" loading="lazy">
                    </a>
                    <div class="card-body">
                        <span class="card-text"><?php echo e($item->item_name); ?></span>
                        <div class="card-footer border-top-0 bg-transparent p-4 pt-0">
                            <div class="text-center">
                                <a href="<?php echo e(route('view-item', ['item' => $item])); ?>" class="btn btn-danger">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php echo e($items->links('partials.pagination')); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Documents\Rio\TI\Binus\Materi Kuliah\Sem 5\Web Programming\LEC\2440016804_FINALEXAM_WebProg\2440016804_E_Grocery\resources\views/main_pages/homepage.blade.php ENDPATH**/ ?>