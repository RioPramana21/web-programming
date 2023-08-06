<div class="container">
    <?php if($books->count()): ?>
        <div class="row">
            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3">
                <div class="card mt-2">
                    <img src="<?php echo e(asset($book->image)); ?>" class="card-img-top" alt="<?php echo e($book->name); ?>">
                    <div class="card-body">
                        <h3 class="card-title fs-4"><?php echo e($book->title); ?></h3>
                        <p class="card-text mb-0">by</p>
                        <p class="card-text mt-0 mb-1 fs-5"><?php echo e($book->author); ?></p>
                        <a href="<?php echo e(route('get_book_detail', ['id' => $book->id])); ?>" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php else: ?>
        <p class="text-center fs-3">There is no book...</p>
    <?php endif; ?>
    
    <div class="mt-3 d-flex justify-content-center">
        <?php echo e($books->links()); ?>

    </div>
</div>
<?php /**PATH C:\Users\User\Desktop\2440016804_MIDEXAM_WebProg\2440016804_GiantBookSupplier\resources\views/partials/book_cards_pagination.blade.php ENDPATH**/ ?>