<?php
$arrProductsLastView = array();
$lastView = empty(\Cookie::get('productsLastView')) ? [] : json_decode(\Cookie::get('productsLastView'), true);
if ($lastView) {
    arsort($lastView);
}

if ($lastView && count($lastView)) {
    $lastView = array_slice($lastView, 0, sc_config('product_viewed'), true);
    $productsLastView = $modelProduct->start()->getProductFromListID(array_keys($lastView))->getData();
    foreach ($lastView as $pId => $time) {
        foreach ($productsLastView as $key => $product) {
            if ($product['id'] == $pId) {
                $product['timelastview'] = $time;
                $arrProductsLastView[] = $product;
            }
        }
    }
}
?>
<?php if(!empty($arrProductsLastView)): ?>
<div class="aside-item col-sm-6 col-lg-12">
    <h6 class="aside-title"><?php echo e(trans('front.products_last_view')); ?></h6>
    <!--last_view_product-->
    <div class="row row-20 row-lg-30 gutters-10">
        <?php $__currentLoopData = $arrProductsLastView; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productLastView): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-4 col-lg-12">
            <!-- Post Minimal-->
            <article class="post post-minimal">
              <div class="unit unit-spacing-sm flex-column flex-lg-row align-items-lg-center">
                <div class="unit-left"><a class="post-minimal-figure" href="<?php echo e($productLastView->getUrl()); ?>">
                    <img src="<?php echo e(asset($productLastView->getThumb())); ?>" alt="" width="106" height="104"></a></div>
                <div class="unit-body">
                  <p class="post-minimal-title"><a href="<?php echo e($productLastView->getUrl()); ?>"><?php echo e($productLastView->name); ?></a></p>
                  <div class="post-minimal-time">
                    <time datetime="<?php echo e($productLastView['timelastview']); ?>"><?php echo e($productLastView['timelastview']); ?></time>
                  </div>
                </div>
              </div>
            </article>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<!--/last_view_product-->
<?php endif; ?>
<?php /**PATH /var/www/automobile.in/resources/views/templates/s-cart-light/block/product_lastview.blade.php ENDPATH**/ ?>