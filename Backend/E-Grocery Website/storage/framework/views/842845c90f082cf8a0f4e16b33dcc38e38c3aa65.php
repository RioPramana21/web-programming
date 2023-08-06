<?php $__env->startSection('title', 'Starting Page'); ?>
<?php $__env->startSection('main'); ?>
<div class="container mt-5 ml-5">
    <div class="row mb-2">
        <div class="col-6">
            <div class="display-6 mb-3" style="text-decoration: underline"><?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?></div>
            <form action="<?php echo e(route('save_role', ['id'=> $user->id])); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <label class="form-label" for="role_id">Role: </label>
                <select class="form-select mb-2 <?php $__errorArgs = ['role_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="role_id" name="role_id">
                    <option value="1" <?php if($user->role_id == 1): ?> selected <?php endif; ?>>Admin</option>
                    <option value="2" <?php if($user->role_id == 2): ?> selected <?php endif; ?>>User</option>
                </select>
                <?php $__errorArgs = ['role_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <div class="d-flex justify-content mt-5">
                    <input type="submit" class="btn btn-warning btn-block btn-lg gradient-custom-4 text-body" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Documents\Rio\TI\Binus\Materi Kuliah\Sem 5\Web Programming\LEC\2440016804_FINALEXAM_WebProg\2440016804_E_Grocery\resources\views/admin/update.blade.php ENDPATH**/ ?>