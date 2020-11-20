<?php
$brands = $modelBrand->start()->getData()
?>
<?php if(!empty($brands)): ?>
<div class="aside-item col-sm-6 col-lg-12">
    <h6 class="aside-title"><?php echo e(trans('front.brands')); ?></h6>
    <div class="row row-10 row-lg-20 gutters-10">
        <div class="group-sm group-tags">
            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a class="link-tag" href="<?php echo e($brand->getUrl()); ?>"> <?php echo e($brand->name); ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <!--brands_products-->
    </div>
</div>
<!--/brands_products-->
<?php endif; ?>
<?php /**PATH /var/www/automobile.in/resources/views/templates/s-cart-light/block/brands_left.blade.php ENDPATH**/ ?>