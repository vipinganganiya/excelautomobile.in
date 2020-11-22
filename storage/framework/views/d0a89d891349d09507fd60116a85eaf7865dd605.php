<?php if(sc_store('active') == '0'): ?>
    <?php echo $__env->make($sc_templatePath . '.maintenance', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?> 

<!DOCTYPE html>
<html class="wide wow-animation" lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700%7CLato%7CKalam:300,400,700">
    <meta name="description" content="<?php echo e($description??sc_store('description')); ?>">
    <meta name="keyword" content="<?php echo e($keyword??sc_store('keyword')); ?>">
    <title><?php echo e($title??sc_store('title')); ?></title>
    <meta property="og:url" content="<?php echo e(\Request::fullUrl()); ?>" />
    <meta property="og:type" content="Website" />
    <meta property="og:title" content="<?php echo e($title??sc_store('title')); ?>" />
    <meta property="og:description" content="<?php echo e($description??sc_store('description')); ?>" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- css default for item s-cart -->
    <?php echo $__env->make($sc_templatePath.'.common.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--//end css defaut -->

    <!--Module meta -->
    <?php if(isset($sc_blocksContent['meta'])): ?>
    <?php $__currentLoopData = $sc_blocksContent['meta']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $layout): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
    $arrPage = explode(',', $layout->page)
    ?>
    <?php if($layout->page == '*' || (isset($layout_page) && in_array($layout_page, $arrPage))): ?>
    <?php if($layout->type =='html'): ?>
    <?php echo $layout->text; ?>

    <?php endif; ?>
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <!--//Module meta -->
    <!-- css default for item s-cart -->
    <!--//end css defaut -->

    <link rel="stylesheet" href="<?php echo e(asset($sc_templateFile.'/css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset($sc_templateFile.'/css/fonts.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset($sc_templateFile.'/css/style.css')); ?>">
    <style>
        <?php echo sc_store_css(); ?>

    </style>
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
    <?php echo $__env->yieldPushContent('styles'); ?>
  </head>
<body>
    <div class="ie-panel">
        <a href="http://windows.microsoft.com/en-US/internet-explorer/">
            <img src="<?php echo e(asset($sc_templateFile.'/images/ie8-panel/warning_bar_0000_us.jpg')); ?>" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.">
        </a>
    </div>

    <div class="page">
        
        <?php $__env->startSection('block_header'); ?>
        <?php echo $__env->make($sc_templatePath.'.block_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldSection(); ?>
        

        
        <?php $__env->startSection('block_top'); ?>
        <?php echo $__env->make($sc_templatePath.'.block_top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldSection(); ?>
        

        
        <?php $__env->startSection('block_main'); ?>
        <section class="section section-xxl bg-default text-md-left">
            <div class="container">
                <div class="row row-50">
                    <?php $__env->startSection('block_main_content'); ?>
                    <?php echo $__env->make($sc_templatePath.'.block_main_content_left', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make($sc_templatePath.'.block_main_content_center', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make($sc_templatePath.'.block_main_content_right', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->yieldSection(); ?>
                </div>
            </div>
        </section>
        <?php echo $__env->yieldSection(); ?>
        

        <?php echo $__env->yieldContent('news'); ?>

        
        <?php $__env->startSection('block_bottom'); ?>
        <?php echo $__env->make($sc_templatePath.'.block_bottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldSection(); ?>
        

        
        <?php $__env->startSection('block_footer'); ?>
        <?php echo $__env->make($sc_templatePath.'.block_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldSection(); ?>
        

    </div>

    <div id="sc-loading">
        <div class="sc-overlay"><i class="fa fa-spinner fa-pulse fa-5x fa-fw "></i></div>
    </div>

    <script src="<?php echo e(asset($sc_templateFile.'/js/core.min.js')); ?>"></script>
    <script src="<?php echo e(asset($sc_templateFile.'/js/script.js')); ?>"></script>
    <!-- js default for item s-cart -->
    <?php echo $__env->make($sc_templatePath.'.common.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--//end js defaut -->
    <?php echo $__env->yieldPushContent('scripts'); ?>

</body>
</html>
<?php endif; ?><?php /**PATH /var/www/excelautomobile.in/resources/views/templates/s-cart-light/layout.blade.php ENDPATH**/ ?>