<?php
$productPromotion = $modelProduct->getProductPromotion()->setRandom()->setLimit(sc_config('product_viewed'))->getData()
?>
<?php if(!empty($productPromotion)): ?>

<div class="aside-item col-sm-6 col-lg-12">
  <h6 class="aside-title"><?php echo e(trans('front.products_special')); ?></h6>
  <div class="row row-10 row-lg-20 gutters-10">
    <?php $__currentLoopData = $productPromotion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-4 col-sm-6 col-md-12">
      <!-- Product Minimal-->
      <article class="product-minimal">
        <div class="unit unit-spacing-sm flex-column flex-md-row align-items-center">
          <div class="unit-left">
            <a class="post-minimal-figure" href="<?php echo e($product->getUrl()); ?>">
            <img src="<?php echo e(asset($product->getThumb())); ?>" alt="" width="106" height="104">
            </a>
          </div>
          <div class="unit-body">
            <p class="product-minimal-title"><a href="<?php echo e($product->getUrl()); ?>"><?php echo e($product->name); ?></a></p>
            <p class="product-minimal-price">
              <?php echo $product->showPrice(); ?>

            </p>
          </div>
        </div>
      </article>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</div>
<!--/product special-->
<?php endif; ?><?php /**PATH /var/www/automobile.in/resources/views/templates/s-cart-light/block/product_special.blade.php ENDPATH**/ ?>