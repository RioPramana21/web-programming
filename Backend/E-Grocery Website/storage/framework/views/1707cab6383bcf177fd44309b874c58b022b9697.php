<nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse" id="sidebarMenu">
    <div class="position-sticky sidebar-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link <?php echo e(Request::is('profile') ? 'active' : ''); ?>" href="/profile" aria-current="page">
            <span class="align-text-bottom" data-feather="home"></span>
            <?php echo app('translator')->get('public.my profile'); ?>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/order">
            <span class="align-text-bottom" data-feather="shopping-cart"></span>
            <?php echo app('translator')->get('public.my cart'); ?>
          </a>
        </li>

      </ul>

      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('is_admin')): ?>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted mt-4 mb-1 px-3">
          <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link <?php echo e(Request::is('profile/accountmanagement*') ? 'active' : ''); ?>" href="/profile/accountmanagement">
              <span class="align-text-bottom" data-feather="grid"></span>
              <?php echo app('translator')->get('public.account management'); ?>
            </a>
          </li>
        </ul>
      <?php endif; ?>

    </div>
  </nav>
<?php /**PATH C:\Users\User\Documents\Rio\TI\Binus\Materi Kuliah\Sem 5\Web Programming\LEC\2440016804_FINALEXAM_WebProg\2440016804_E_Grocery\resources\views/main_pages/testlay/sidebar.blade.php ENDPATH**/ ?>