

<?php $__env->startSection('content'); ?>
    <div class="mt-3">
        <a href="<?php echo e(route('display_insert_form_view')); ?>"><button class="btn btn-warning w-100 mb-5">Insert New Product</button></a>
        <?php if(count($products) < 1): ?>
            <h1 class="text-center border border-danger rounded p-5">There is No Product</h1>
        <?php else: ?>
            <div class="row row-cols-3 gap-4 d-flex justify-content-center respon">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card col p-3 glass-effect" style="width: 20rem;">
                    <img class="card-img-top" src="<?php echo e($data->product_img_url); ?>" alt="Card image cap" style="width: 100%; height: 50%">
                    <div class="card-body">
                        <div class="desc-product">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="card-title"><?php echo e($data->product_name); ?> 
                                    <h6 class="bg-warning rounded p-1">Price: <?php echo e($data->product_price); ?></h6>
                                </h5>
                            </div>
                            <p class="card-text"><?php echo e($data->product_desc); ?></p>
                        </div>
                        <form action="<?php echo e(route('add_delete_logic', ['product_id' => $data->product_id])); ?>" method="POST">
                            <?php echo method_field('delete'); ?>
                            <?php echo csrf_field(); ?>
                            <button class="btn btn-danger w-100">Delete</button>
                        </form>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\BINUS5\WEB_PROG\LEC\perbaikan_website\MyWebsite\resources\views/manage_page.blade.php ENDPATH**/ ?>