<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('main'); ?>
<?php if($message=Session::get('success_message')): ?>
<div class="card col-6 mx-auto mt-5 alert alert-success" role="alert" style="width:30rem;">
    <?php echo e($message); ?>

</div>
<?php endif; ?>
<table class="table mx-auto my-3" style="width: 40%">
<thead class="thead-dark">
    <tr style="background-color: #a1d2f3" class="text-dark">
        <th scope="col"><u><?php echo app('translator')->get('public.user lists'); ?></u></th>
        <th scope="col"><u><?php echo app('translator')->get('public.action list'); ?></u></th>
    </tr>
</thead>
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tbody>
        <tr>
            <td><?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?> -
                <?php if($user->role_id == 1): ?>
                    Admin
                <?php elseif($user->role_id == 2): ?>
                    <?php echo app('translator')->get('public.user'); ?>
                <?php endif; ?>
            </td>
            <td>
                <a href="<?php echo e(route('update_role', ['id'=>$user->id])); ?>" class="btn btn-primary text-decoration-none text-white"><?php echo app('translator')->get('public.update role'); ?></a>
                <a href="<?php echo e(route('delete_role', ['id'=>$user->id])); ?>" class="btn btn-danger text-decoration-none text-white"><?php echo app('translator')->get('public.delete'); ?></a>
            </td>
        </tr>
    </tbody>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Documents\Rio\TI\Binus\Materi Kuliah\Sem 5\Web Programming\LEC\2440016804_FINALEXAM_WebProg\2440016804_E_Grocery\resources\views/admin/maintain.blade.php ENDPATH**/ ?>