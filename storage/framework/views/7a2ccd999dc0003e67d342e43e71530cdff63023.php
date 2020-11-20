<?php
/*
$layout_page = shop_page
**Variables:**
- $page: no paginate
*/ 
?>



<?php $__env->startSection('block_main'); ?>
<section class="section section-sm section-first bg-default text-md-left">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php echo sc_html_render($page->content); ?>

            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('breadcrumb'); ?>
<?php
$bannerBreadcrumb = $modelBanner->start()->getBreadcrumb()->getData()->first();
?>
<section class="breadcrumbs-custom">
  <div class="parallax-container" data-parallax-img="<?php echo e(asset($bannerBreadcrumb['image'] ?? '')); ?>">
    <div class="material-parallax parallax">
      <img src="<?php echo e(asset($bannerBreadcrumb['image'] ?? '')); ?>" alt="" style="display: block; transform: translate3d(-50%, 83px, 0px);">
    </div>
    <div class="breadcrumbs-custom-body parallax-content context-dark">
      <div class="container">
        <h2 class="breadcrumbs-custom-title"><?php echo e($title ?? ''); ?></h2>
      </div>
    </div>
  </div>
  <div class="breadcrumbs-custom-footer">
    <div class="container">
      <ul class="breadcrumbs-custom-path">
        <li><a href="<?php echo e(sc_route('home')); ?>"><?php echo e(trans('front.home')); ?></a></li>
        <li class="active"><?php echo e($title ?? ''); ?></li>
      </ul>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('styles'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make($sc_templatePath.'.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/automobile.in/resources/views/templates/s-cart-light/screen/shop_page.blade.php ENDPATH**/ ?>