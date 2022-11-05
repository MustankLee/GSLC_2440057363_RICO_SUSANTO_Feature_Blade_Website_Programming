

<?php $__env->startSection('content'); ?>

    <div class="card mb-4 bg-green text-center">
        <div class="card-body">
        <h3 class="card-title">&#128276;Informations</h3>
        <p class="card-text pt-3">Update feature is not avaialble for now, please wait for the next development of this website.</p>
        </div>
    </div>

    <form action="<?php echo e(route('add_insert_logic')); ?>" method="POST" enctype="multipart/form-data" class="w-100 insert-form d-flex flex-column justify-content-center">
        <?php echo csrf_field(); ?>
         <div class="glass-effect p-5">
            <h1 class="text-center">&#128640;Insert Product Form</h1>
            
            <div class="py-3"></div>

            <div class="rspnsv-set-up w-100">
                <div class="d-flex flex-column py-3">
                    <label class="py-1"><h5>Product Name</h5></label>
                    <input type="text" class="bg-transparent border-style-form" placeholder="Input product name" name="product_name">
                    <?php $__errorArgs = ['product_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                
                <div class="d-flex flex-column py-3">
                    <label class="py-1"><h5>Product Price</h5></label>
                    <input type="number" class="bg-transparent border-style-form" placeholder="Input product price" name="product_price">
                    <?php $__errorArgs = ['product_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>

            <div class="rspnsv-set-up w-100">
                <div class="d-flex flex-column py-3">
                    <label class="py-1"><h5>Product Description</h5></label>
                    <input type="text" class="bg-transparent border-style-form" placeholder="Input product description" name="product_desc">
                    <?php $__errorArgs = ['product_desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
    
                <div class="d-flex flex-column py-3">
                    <label class="py-1"><h5>Product Image Url</h5></label>
                    <input type="text" class="bg-transparent border-style-form" placeholder="Input product image url" name="product_url">
                    <?php $__errorArgs = ['product_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>

            <div class="py-3"></div>

            <div>
                <button type="submit" class="btn w-25 btn-primary p-2">Submit</button>
            </div>            
        </div>
    </form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\BINUS5\WEB_PROG\LEC\perbaikan_website\MyWebsite\resources\views/insert_form.blade.php ENDPATH**/ ?>