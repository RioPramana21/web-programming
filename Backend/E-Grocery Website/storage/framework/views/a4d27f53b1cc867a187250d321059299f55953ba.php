<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('main'); ?>
<?php if($message=Session::get('success_message')): ?>
    <div class="card col-6 mx-auto mt-5 alert alert-success" role="alert" style="width:30rem;">
        <?php echo e($message); ?>

    </div>
<?php endif; ?>
<div class="container mt-5 ml-5">
    <div class="row mb-2">
        <div class="display-6 mb-3" style="text-decoration: underline"><?php echo app('translator')->get('public.my cart'); ?></div>
        <?php if(count($orders) == 0): ?>
            <p class="fw-bold"><?php echo app('translator')->get('public.no products in cart!'); ?></p>
        <?php else: ?>
        <div class="row no-gutters">
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row mb-4">
                <div class="col-3 my-auto">
                    <img src="<?php echo e(url('storage/'.$order->items->item_picture_link)); ?>" class="card-img w-50 h-50" alt="<?php echo e($order->items->item_name); ?>">
                </div>
                <div class="col-3 my-auto">
                    <h5 class="card-title"><?php echo e($order->items->item_name); ?></h5>
                </div>
                <div class="col-3 my-auto">
                    <h5 class="card-title">Rp. <?php echo e($order->items->price); ?>,-</h5>
                </div>
                <div class="col-3 my-auto">
                    <form action="<?php echo e(route('delete_item', ['id'=>$order->id])); ?>" method="POST">
                        <?php echo method_field('delete'); ?>
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-danger" type="submit">
                            <?php echo app('translator')->get('public.delete'); ?>
                        </button>
                    </form>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="row mb-4">
                <div class="col-3 mx-auto"></div>
                <div class="col-3 mx-auto"></div>
                <div class="col-3 mx-auto my-auto">
                    <h5><?php echo app('translator')->get('public.total price'); ?>: Rp. <?php echo e($total_price); ?>,-</h5>
                </div>
                <div class="col-3 mx-auto my-auto">
                    <form action="<?php echo e(route('check_out')); ?>" method="POST">
                        <?php echo method_field('delete'); ?>
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-success" type="submit">
                            <?php echo app('translator')->get('public.checkout'); ?>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Documents\Rio\TI\Binus\Materi Kuliah\Sem 5\Web Programming\LEC\2440016804_FINALEXAM_WebProg\2440016804_E_Grocery\resources\views/main_pages/cart.blade.php ENDPATH**/ ?>