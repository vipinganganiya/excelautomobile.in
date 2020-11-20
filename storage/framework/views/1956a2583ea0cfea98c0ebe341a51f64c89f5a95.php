<?php
/*
$layout_page = home
*/ 
?>


<?php
$productsNew = $modelProduct->start()->getProductLatest()->setlimit(sc_config('product_top'))->getData();
$news = $modelNews->start()->setlimit(sc_config('item_top'))->getData();
?>

<?php $__env->startSection('block_main'); ?>
      <!-- New Products-->
      <section class="section section-xxl bg-default">
        <div class="container">

          <h2 class="wow fadeScale"><?php echo e(trans('front.products_new')); ?></h2>

          <div class="row row-30 row-lg-50">
            <?php $__currentLoopData = $productsNew; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $productNew): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <!-- Product-->
                <article class="product wow fadeInRight">
                  <div class="product-body">

                    
                    <div class="product-figure">
                        <a href="<?php echo e($productNew->getUrl()); ?>">
                        <img src="<?php echo e(asset($productNew->getThumb())); ?>" alt="<?php echo e($productNew->name); ?>"/>
                        </a>
                    </div>
                    

                    
                    <h5 class="product-title"><a href="<?php echo e($productNew->getUrl()); ?>"><?php echo e($productNew->name); ?></a></h5>
                    

                    
                    <?php if(sc_config_global('MultiStorePro') && config('app.storeId') == 1): ?>
                      <div class="store-url"><a href="<?php echo e($productNew->goToStore()); ?>"><i class="fa fa-shopping-bag" aria-hidden="true"></i> <?php echo e(trans('front.store').' '. $productNew->store_id); ?></a>
                      </div>
                    <?php endif; ?>
                    

                    
                    <?php if($productNew->allowSale()): ?>
                      <a onClick="addToCartAjax('<?php echo e($productNew->id); ?>','default','<?php echo e($productNew->store_id); ?>')" class="button button-lg button-secondary button-zakaria add-to-cart-list"><i class="fa fa-cart-plus"></i> <?php echo e(trans('front.add_to_cart')); ?></a>
                    <?php endif; ?>
                    

                    <?php echo $productNew->showPrice(); ?>

                  </div>
                  
                  
                  <?php if($productNew->price != $productNew->getFinalPrice() && $productNew->kind !=SC_PRODUCT_GROUP): ?>
                    <span><img class="product-badge new" src="<?php echo e(asset($sc_templateFile.'/images/home/sale.png')); ?>" class="new" alt="" /></span>
                    <?php elseif($productNew->kind == SC_PRODUCT_BUILD): ?>
                    <span><img class="product-badge new" src="<?php echo e(asset($sc_templateFile.'/images/home/bundle.png')); ?>" class="new" alt="" /></span>
                    <?php elseif($productNew->kind == SC_PRODUCT_GROUP): ?>
                    <span><img class="product-badge new" src="<?php echo e(asset($sc_templateFile.'/images/home/group.png')); ?>" class="new" alt="" /></span>
                  <?php endif; ?>
                  

                  
                  <div class="product-button-wrap">
                    <div class="product-button">
                        <a class="button button-secondary button-zakaria" onClick="addToCartAjax('<?php echo e($productNew->id); ?>','wishlist','<?php echo e($productNew->store_id); ?>')">
                            <i class="fas fa-heart"></i>
                        </a>
                    </div>
                    <div class="product-button">
                        <a class="button button-primary button-zakaria" onClick="addToCartAjax('<?php echo e($productNew->id); ?>','compare','<?php echo e($productNew->store_id); ?>')">
                            <i class="fa fa-exchange"></i>
                        </a>
                    </div>
                  

                  </div>
                </article>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </section>      
<?php $__env->stopSection(); ?>

<?php $__env->startSection('news'); ?>
  <?php if($news): ?>
  <!-- Our Blog-->
  <section class="section section-xxl section-last bg-gray-21">
    <div class="container">
      <h2 class="wow fadeScale"><?php echo e(trans('front.blog')); ?></h2>
    </div>
    <!-- Owl Carousel-->
    <div class="owl-carousel owl-style-7" data-items="1" data-sm-items="2" data-xl-items="3" data-xxl-items="4" data-nav="true" data-dots="true" data-margin="30" data-autoplay="true">
      <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <!-- Post Creative-->
      <article class="post post-creative"><a class="post-creative-figure" href="<?php echo e($blog->getUrl()); ?>"><img src="<?php echo e(asset($blog->getThumb())); ?>" alt="" width="420" height="368"/></a>
        <div class="post-creative-content">
          <h5 class="post-creative-title"><a href="<?php echo e($blog->getUrl()); ?>"><?php echo e($blog->title); ?></a></h5>
          <div class="post-creative-time">
            <time datetime="<?php echo e($blog->created_at); ?>"><?php echo e($blog->created_at); ?></time>
          </div>
        </div>
      </article>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </section>
  <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make($sc_templatePath.'.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/automobile.in/resources/views/templates/s-cart-light/screen/home.blade.php ENDPATH**/ ?>