<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/">E-Grocery</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="navbar-nav">
        <form action="/logout" method="POST">
            <?php echo csrf_field(); ?>
            <button type="submit" class="nav-link px-3 bg-dark border-0">
                <?php echo app('translator')->get('public.logout'); ?> <span data-feather="log-out" class="align-text-bottom"></span></button>
        </form>
    </div>
</header>
<?php /**PATH C:\Users\User\Documents\Rio\TI\Binus\Materi Kuliah\Sem 5\Web Programming\LEC\2440016804_FINALEXAM_WebProg\2440016804_E_Grocery\resources\views/main_pages/testlay/header.blade.php ENDPATH**/ ?>