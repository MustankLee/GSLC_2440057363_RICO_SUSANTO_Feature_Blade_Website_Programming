<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RecycleHops</title>
    <style>@import  url('https://fonts.googleapis.com/css2?family=Nunito:ital@0;1&family=Poppins&display=swap');</style>
    <link rel="stylesheet" href="<?php echo e(asset ('style.css')); ?>">
</head>
<body>
    <?php echo $__env->make('nav_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="welcome-part">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    
</body>
</html><?php /**PATH C:\BINUS5\WEB_PROG\LEC\GSLC_2440057363\MyWebsite\resources\views/website.blade.php ENDPATH**/ ?>