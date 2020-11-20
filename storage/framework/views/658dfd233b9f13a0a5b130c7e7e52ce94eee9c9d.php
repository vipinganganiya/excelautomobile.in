<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo e($description??sc_store('description')); ?>">
    <meta name="keyword" content="<?php echo e($keyword??sc_store('keyword')); ?>">
    <title><?php echo e(trans('front.maintenance')); ?></title>
    <meta property="og:image" content="<?php echo e(!empty($og_image)?asset($og_image):asset('images/org.jpg')); ?>" />
    <meta property="og:url" content="<?php echo e(\Request::fullUrl()); ?>" />
    <meta property="og:type" content="Website" />
    <meta property="og:title" content="<?php echo e($title??sc_store('title')); ?>" />
    <meta property="og:description" content="<?php echo e($description??sc_store('description')); ?>" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
</head>
<body>
  <section>
    <div class="container">
      <div class="row">
        <div id="columns" class="container"  style="color:red;text-align: center;">
          <?php echo sc_store('maintain_content'); ?>

        </div>
      </div>
    </div>
  </section>
</body><?php /**PATH /var/www/automobile.in/resources/views/templates/s-cart-light/maintenance.blade.php ENDPATH**/ ?>