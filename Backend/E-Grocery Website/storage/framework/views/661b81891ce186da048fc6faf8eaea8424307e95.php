<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="/">E-Grocery</a>
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" type="button"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <?php if(auth()->guard()->check()): ?>
              <ul class="navbar-nav me-auto mb-lg-0 mb-2">
                  <li class="nav-item">
                  <a class="nav-link <?php echo e($active === 'home' ? 'active' : ''); ?>" href="/"><?php echo app('translator')->get('public.home'); ?></a>
                  </li>
              </ul>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                  aria-expanded="false">
                  <?php echo app('translator')->get('public.hello, '); ?> <?php echo e(auth()->user()->first_name); ?>

                  </a>
                  <ul class="dropdown-menu">
                  <li>
                      <a class="dropdown-item" href="/profile">
                      <i class="bi bi-layout-text-sidebar-reverse"></i>
                      <?php echo app('translator')->get('public.my profile'); ?>
                      </a>
                  </li>
                  <li>
                      <hr class="dropdown-divider">
                  </li>
                  <li>
                      <a class="dropdown-item" href="<?php echo e(route('my_cart')); ?>">
                      <i class="bi bi-layout-text-sidebar-reverse"></i>
                      <?php echo app('translator')->get('public.my cart'); ?>
                      </a>
                  </li>
                  <li>
                      <hr class="dropdown-divider">
                  </li>
                  <?php if(Auth::user()->role_id == 1): ?>
                        <li>
                            <a class="dropdown-item" href="<?php echo e(route('account_maintenance')); ?>">
                            <i class="bi bi-layout-text-sidebar-reverse"></i>
                                <?php echo app('translator')->get('public.acc_maintain'); ?>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                  <?php endif; ?>
                  <li>
                      <form action="/logout" method="POST">
                      <?php echo csrf_field(); ?>
                      <button class="dropdown-item" type="submit"><i class="bi bi-box-arrow-right"></i>
                          <?php echo app('translator')->get('public.logout'); ?>
                        </button>
                      </form>
                  </li>
                  </ul>
              </li>
          <?php else: ?>
            <li class="nav-item">
                <a class="nav-link" href="/register"><?php echo app('translator')->get('public.register'); ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo e($active === 'login' ? 'active' : ''); ?>" href="/login"><i
                  class="bi bi-box-arrow-in-right"></i> <?php echo app('translator')->get('public.login'); ?></a>
            </li>
          <?php endif; ?>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
              aria-expanded="false">
              <?php echo app('translator')->get('public.language'); ?>
              </a>
              <ul class="dropdown-menu">
              <li>
                  <a class="dropdown-item" href="locale/ina">
                    Indonesia
                  </a>
              </li>
              <li>
                  <hr class="dropdown-divider">
              </li>
              <li>
                  <a class="dropdown-item" href="locale/en">
                    English
                  </a>
              </li>
          </li>
        </ul>

      </div>
    </div>
  </nav>
<?php /**PATH C:\Users\User\Documents\Rio\TI\Binus\Materi Kuliah\Sem 5\Web Programming\LEC\2440016804_FINALEXAM_WebProg\2440016804_E_Grocery\resources\views/partials/header.blade.php ENDPATH**/ ?>