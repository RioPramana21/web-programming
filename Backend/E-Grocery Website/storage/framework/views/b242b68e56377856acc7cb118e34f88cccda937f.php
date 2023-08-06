<?php $__env->startSection('title', 'Register'); ?>
<?php $__env->startSection('main'); ?>

    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center"><?php echo app('translator')->get('public.registration form'); ?></h1>
                <form action="/register" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div class="form-floating">
                        <input type="text" name="first_name"
                            class="form-control rounded-top <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="first_name"
                            placeholder="Name" required value="<?php echo e(old('first_name')); ?>" autofocus>
                        <label for="first_name" class="fw-bold"><?php echo app('translator')->get('public.first name'); ?> </label>
                        <?php $__errorArgs = ['first_name'];
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
                    </div>

                    <div class="form-floating">
                        <input type="text" name="last_name"
                            class="form-control rounded-top <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="last_name"
                            placeholder="Last Name" required value="<?php echo e(old('last_name')); ?>">
                        <label for="last_name" class="fw-bold"><?php echo app('translator')->get('public.last name'); ?> </label>
                        <?php $__errorArgs = ['last_name'];
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
                    </div>

                    <div class="form-floating">
                        <input type="email" name="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            id="email" placeholder="name@example.com" required value="<?php echo e(old('email')); ?>">
                        <label for="email" class="fw-bold" ><?php echo app('translator')->get('public.email address'); ?> </label>
                        <?php $__errorArgs = ['email'];
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
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="role_id" class="fw-bold"><?php echo app('translator')->get('public.role'); ?>:
                            <select id="role_id" name="role_id" class="form-control <?php $__errorArgs = ['role_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" >
                                <option value=1>Admin</option>
                                <option value=2><?php echo app('translator')->get('public.user'); ?></option>
                            </select>
                        </label>
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
                    </div>

                    <div class="mb-4">
                        <p class="fw-bold" ><?php echo app('translator')->get('public.gender'); ?>: </p>
                        <label for="male"><?php echo app('translator')->get('public.male'); ?></label>
                        <input type="radio" id="male" name="gender_id" value=1>

                        <label for="female"><?php echo app('translator')->get('public.female'); ?></label>
                        <input type="radio" id="female" name="gender_id" value=2>
                    </div>

                    <div class="mb-3 mt-6">
                        <label class="form-label fw-bold" for="flImage"><?php echo app('translator')->get('public.display picture'); ?></label>
                        <input class="form-control" id="flImage" name="display_picture_link" type="file">
                        <?php $__errorArgs = ['display_picture_link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="form-text text-danger"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <img class="w-25 ratio ratio-1x1 mt-3" id="preview" src='' alt=""
                            style="aspect-ratio: 1; object-fit: cover;">
                    </div>

                    <div class="form-floating">
                        <input type="password" name="password"
                            class="form-control rounded-bottom <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password"
                            placeholder="Password" required">
                        <label for="password" class="fw-bold"><?php echo app('translator')->get('public.password'); ?></label>
                        <?php $__errorArgs = ['password'];
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
                    </div>

                    <div class="form-floating">
                        <input type="password" name="password_confirmation"
                            class="form-control rounded-bottom <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="confirmpassword"
                            placeholder="Confirm Password" required">
                        <label for="confirmpassword" class="fw-bold"><?php echo app('translator')->get('public.confirm password'); ?></label>
                        <?php $__errorArgs = ['password_confirmation'];
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
                    </div>

                    <button class="w-100 btn btn-lg btn-primary mt-4" type="submit"><?php echo app('translator')->get('public.register'); ?></button>

                </form>

                <small class="d-block text-center mt-3"><a href="/login"><?php echo app('translator')->get('public.already have an account?'); ?></a></small>
            </main>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        const imageInp = document.querySelector("#flImage");
        const imgEl = document.querySelector("#preview");

        imageInp.onchange = (ev) => {
            const [file] = imageInp.files;
            if (file) {
                imgEl.src = URL.createObjectURL(file);
            }
        };
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Documents\Rio\TI\Binus\Materi Kuliah\Sem 5\Web Programming\LEC\2440016804_FINALEXAM_WebProg\2440016804_E_Grocery\resources\views/auth/register.blade.php ENDPATH**/ ?>