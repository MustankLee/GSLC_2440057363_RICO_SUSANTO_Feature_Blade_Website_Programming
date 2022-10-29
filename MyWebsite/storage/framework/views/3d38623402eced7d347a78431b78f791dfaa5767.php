<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RecycleHops</title>
    <style>@import  url('https://fonts.googleapis.com/css2?family=Nunito:ital@0;1&family=Poppins&display=swap');</style>
    <link rel="stylesheet" href="<?php echo e(asset ('CSS/style.css')); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?php echo e(asset ('JS/index.js')); ?>"></script>
</head>
<body>
    <?php echo $__env->make('nav_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container-web">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="<?php echo e(asset ('JS/typing.js')); ?>"></script>  


</body>
</html><?php /**PATH C:\BINUS5\WEB_PROG\LEC\untuk kumpul gslc 1 temp\MyWebsite\resources\views/structure_website.blade.php ENDPATH**/ ?>