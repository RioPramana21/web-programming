<nav class="navbar navbar-expand-lg">
    <div class="mx-auto d-sm-flex d-block flex-sm-nowrap">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link link-primary <?php echo e($active == 'homepage' ? 'active' : ''); ?>" href="<?php echo e(route('home')); ?>">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle link-primary <?php echo e($active == 'categories' ? 'active' : ''); ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            <ul class="dropdown-menu">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a class="dropdown-item" href="<?php echo e(route('get_category_detail', ['id' => $category->id])); ?>"><?php echo e($category->name); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link link-primary <?php echo e($active == 'publishers' ? 'active' : ''); ?>" href="<?php echo e(route('get_publishers')); ?>">Publisher</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-primary <?php echo e($active == 'contact' ? 'active' : ''); ?>" href="<?php echo e(route('contact')); ?>">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<?php /**PATH C:\Users\User\Desktop\2440016804_MIDEXAM_WebProg\2440016804_GiantBookSupplier\resources\views/partials/navbar.blade.php ENDPATH**/ ?>