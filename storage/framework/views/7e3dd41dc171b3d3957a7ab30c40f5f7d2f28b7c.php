      <!-- Page Footer-->
      <footer class="section footer-classic">
        <div class="footer-classic-body section-lg bg-brown-2">
          <div class="container">
            <div class="row row-40 row-md-50 justify-content-xl-between">
              <div class="col-sm-6 col-lg-4 col-xl-3 wow fadeInRight">
                <a href="<?php echo e(sc_route('home')); ?>">
                    <img class="logo-footer" src="<?php echo e(asset(sc_store('logo'))); ?>" alt="<?php echo e(sc_store('title')); ?>">
                </a>
                <p><?php echo e(sc_store('title')); ?></p>
                <p> <?php echo sc_store('time_active'); ?></p>
                <div class="footer-classic-social">
                  <div class="group-lg group-middle">
                    <div>
                      <ul class="list-inline list-social list-inline-sm">
                        <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                        <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                        <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                        <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-3 wow fadeInRight" data-wow-delay=".1s">
                <h4 class="footer-classic-title"><?php echo e(trans('front.about')); ?></h4>
                <ul class="contacts-creative">
                  <li>
                    <div class="unit unit-spacing-sm flex-column flex-md-row">
                      <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                      <div class="unit-body"><a href="#"><?php echo e(trans('front.shop_info.address')); ?>: <?php echo e(sc_store('address')); ?></a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-sm flex-column flex-md-row">
                      <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                      <div class="unit-body"><a href="tel:#"><?php echo e(trans('front.shop_info.hotline')); ?>: <?php echo e(sc_store('long_phone')); ?></a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-sm flex-column flex-md-row">
                      <div class="unit-left"><span class="icon mdi mdi-email-outline"></span></div>
                      <div class="unit-body"><a href="mailto:#<?php echo e(sc_store('email')); ?>"><?php echo e(trans('front.shop_info.email')); ?>: <?php echo e(sc_store('email')); ?></a></div>
                    </div>
                  </li>
                  <li>

                    <form class="rd-form-inline rd-form-inline-2"  method="post" action="<?php echo e(sc_route('subscribe')); ?>">
                        <?php echo csrf_field(); ?>
                          <div class="form-wrap">
                            <input class="form-input" id="subscribe-form-2-email" type="email" name="subscribe_email" required/>
                            <label class="form-label" for="subscribe-form-2-email"><?php echo e(trans('front.subscribe.subscribe_email')); ?></label>
                          </div>
                          <div class="form-button">
                            <button class="button button-icon-2 button-zakaria button-primary" type="submit" title="<?php echo e(trans('front.subscribe.title')); ?>">
                              <span class="fl-bigmug-line-paper122"></span>
                            </button>
                          </div>
                        </form>
                  </li>
                </ul>
              </div>
              <div class="col-lg-4 wow fadeInRight" data-wow-delay=".2s">
                <h4 class="footer-classic-title"> <?php echo e(trans('front.my_account')); ?></h4>
                <!-- RD Mailform-->
                <ul class="contacts-creative">
                    <?php if(!empty($sc_layoutsUrl['footer'])): ?>
                    <?php $__currentLoopData = $sc_layoutsUrl['footer']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a <?php echo e(($url->target =='_blank')?'target=_blank':''); ?>

                            href="<?php echo e(sc_url_render($url->url)); ?>"><?php echo e(sc_language_render($url->name)); ?></a>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-classic-panel">
          <div class="container">
            <div class="row row-10 align-items-center justify-content-sm-between">
              <div class="col-md-auto">
                <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span><?php echo e(sc_store('title')); ?></span><span>.&nbsp; All rights reserved</span></p>
              </div>
              <div class="col-md-auto order-md-1">Hosted by <a target="_blank"
                href="http://ExcelAutoMobile.com">ExcelAutoMobile.com</a></div>
              <div class="col-md-auto">
                    Power by <a href="<?php echo e(config('s-cart.homepage')); ?>"><?php echo e(config('s-cart.name')); ?> <?php echo e(config('s-cart.sub-version')); ?></a>
              </div>
            </div>
          </div>
        </div>
      </footer><?php /**PATH /var/www/automobile.in/resources/views/templates/s-cart-light/block_footer.blade.php ENDPATH**/ ?>