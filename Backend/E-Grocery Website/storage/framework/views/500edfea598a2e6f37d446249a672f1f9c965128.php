<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Grocery | <?php echo $__env->yieldContent('title'); ?></title>
  <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>

  <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php if (! empty(trim($__env->yieldContent('overlay')))): ?>
    <section class="overlay">
      <?php echo $__env->yieldContent('overlay'); ?>
    </section>
  <?php endif; ?>

  <?php if (! empty(trim($__env->yieldContent('main')))): ?>
    <main class="main container py-4">
      <?php echo $__env->yieldContent('main'); ?>
    </main>
  <?php endif; ?>

  <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <script src="<?php echo e(asset('js/app.js')); ?>"></script>
  <?php echo $__env->yieldPushContent('scripts'); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>

</html>
<?php /**PATH C:\Users\User\Documents\Rio\TI\Binus\Materi Kuliah\Sem 5\Web Programming\LEC\2440016804_FINALEXAM_WebProg\2440016804_E_Grocery\resources\views/layout/layout.blade.php ENDPATH**/ ?>