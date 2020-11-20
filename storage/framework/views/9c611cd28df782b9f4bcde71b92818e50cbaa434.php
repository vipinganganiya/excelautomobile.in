<?php
$categoriesTop = $modelCategory->start()->getCategoryTop()->getData();
?>
<?php if($categoriesTop->count()): ?>
<div class="aside-item col-sm-6 col-md-5 col-lg-12">
  <h6 class="aside-title"><?php echo e(trans('front.categories')); ?></h6>
  <ul class="list-shop-filter">
    <?php $__currentLoopData = $categoriesTop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="product-minimal-title active"><a href="<?php echo e($category->getUrl()); ?>"> <?php echo e($category->title); ?></a></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </ul>
</div>
<?php endif; ?><?php /**PATH /var/www/automobile.in/resources/views/templates/s-cart-light/block/categories.blade.php ENDPATH**/ ?>