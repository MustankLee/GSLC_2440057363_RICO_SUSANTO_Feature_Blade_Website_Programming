<main class="content">
    <div class="content-1">
        <h2 class="bold-title-1">We're <span class="type_it"></span></h2>
        <h1 class="reg">Recycle Product | Not Always Bad</h1>
        <p class=" ln-spacing reg">We provide a thousand recycle product to let you take to home with a good price and good quality. Let's start using recycle product to save our planet's. All of the products we sell are certified, so what're you waiting for? Get some product now...</p>
        <a href="#jump-ctn-2"><button class="ln-spacing reg exp"><b>Explore our products</b></button></a>
    </div>
    
    <section class="content-2" id="jump-ctn-2">
        <div class="bold-title-2">
            Our Products
        </div>

        <div class="grid-container">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="box">  
                <img class="ctn-img" src="<?php echo e($product->image_link); ?>" alt="">              
                <h1 class="bold-title-3"><?php echo e($product->product_name); ?></h1>
                
                <?php switch($product->quality):
                    case (1): ?>
                        <h1 class="ln-spacing reg">Acceptable Quality</h1>
                        <?php break; ?>
                    <?php case (2): ?>
                        <h1 class="ln-spacing reg">Good Quality</h1>
                        <?php break; ?>
                    <?php case (3): ?>
                        <h1 class="ln-spacing reg">High Quality</h1>
                        <?php break; ?>
                    <?php default: ?>
                <?php endswitch; ?>

                <p class="reg">Price: <?php echo e($product->price); ?></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
    
</main>  <?php /**PATH C:\BINUS5\WEB_PROG\LEC\GSLC_2440057363\MyWebsite\resources\views/home.blade.php ENDPATH**/ ?>