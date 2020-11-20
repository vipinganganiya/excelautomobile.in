      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="100px" data-xl-stick-up-offset="100px" data-xxl-stick-up-offset="100px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <!--Brand--><a class="brand" href="<?php echo e(sc_route('home')); ?>"><img class="brand-logo-dark" src="<?php echo e(asset(sc_store('logo'))); ?>" alt="" width="105" height="44"/>
                      <img class="brand-logo-light" src="<?php echo e(asset(sc_store('logo'))); ?>" alt="" width="106" height="44"/></a>
                  </div>
                </div>
                <div class="rd-navbar-nav-wrap">
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="<?php echo e(sc_route('home')); ?>"><?php echo e(trans('front.home')); ?></a></li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="<?php echo e(sc_route('shop')); ?>"><?php echo e(trans('front.shop')); ?></a>

                      
                      <?php if(sc_config_global('MultiStorePro') && sc_store_active() && config('app.storeId') == 1): ?>
                      <ul class="rd-menu rd-navbar-dropdown">
                        <?php $__currentLoopData = sc_store_active(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $storeActive): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="<?php echo e(sc_route('multistorepro.detail', ['code' => $storeActive->code])); ?>""><?php echo e($storeActive->getTitle()); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </ul>
                      <?php endif; ?>
                      

                    </li>
                    <li class="rd-nav-item">
                        <a class="rd-nav-link" href="<?php echo e(sc_route('news')); ?>"><?php echo e(trans('front.blog')); ?></a>
                    </li>
                    <?php if(!empty(sc_config('Content'))): ?>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="#"><?php echo e(trans('front.cms_category')); ?></a>
                        <?php
                        $nameSpace = sc_get_plugin_namespace('Cms','Content').'\Models\CmsCategory';
                        $cmsCategories = (new $nameSpace)->getCategoryRoot()->getData();
                        ?>
                        <ul class="rd-menu rd-navbar-dropdown">
                            <?php $__currentLoopData = $cmsCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cmsCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="<?php echo e($cmsCategory->getUrl()); ?>"><?php echo e(sc_language_render($cmsCategory->title)); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>
                    <?php endif; ?>

                    <?php if(!empty($sc_layoutsUrl['menu'])): ?>
                    <?php $__currentLoopData = $sc_layoutsUrl['menu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="rd-nav-item">
                        <a class="rd-nav-link" <?php echo e(($url->target =='_blank')?'target=_blank':''); ?>

                            href="<?php echo e(sc_url_render($url->url)); ?>"><?php echo e(sc_language_render($url->name)); ?></a>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>

                    <?php if(auth()->guard()->guest()): ?>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="#"><i class="fa fa-lock"></i> <?php echo e(trans('front.account')); ?></a>
                        <ul class="rd-menu rd-navbar-dropdown">
                            <li class="rd-dropdown-item">
                                <a class="rd-dropdown-link" href="<?php echo e(sc_route('login')); ?>"><i class="fa fa-user"></i> <?php echo e(trans('front.login')); ?></a>
                            </li>
                            <?php if(!empty(sc_config('LoginSocialite'))): ?>
                            <li class="rd-dropdown-item">
                              <a class="rd-dropdown-link" href="<?php echo e(sc_route('login_socialite.index', ['provider' => 'facebook'])); ?>"><i class="fab fa-facebook"></i>
                                 <?php echo e(trans('front.login')); ?> facebook</a>
                            </li>
                            <li class="rd-dropdown-item">
                              <a class="rd-dropdown-link" href="<?php echo e(sc_route('login_socialite.index', ['provider' => 'google'])); ?>"><i class="fab fa-google-plus"></i>
                                 <?php echo e(trans('front.login')); ?> google</a>
                            </li>
                            <li class="rd-dropdown-item">
                              <a class="rd-dropdown-link" href="<?php echo e(sc_route('login_socialite.index', ['provider' => 'github'])); ?>"><i class="fab fa-github"></i>
                                 <?php echo e(trans('front.login')); ?> github</a>
                            </li>
                            <?php endif; ?>

                            <li class="rd-dropdown-item">
                                <a class="rd-dropdown-link" href="<?php echo e(sc_route('wishlist')); ?>"><i class="fas fa-heart"></i> <?php echo e(trans('front.wishlist')); ?> 
                                    <span class="count sc-wishlist"
                                    id="shopping-wishlist"><?php echo e(Cart::instance('wishlist')->count()); ?></span>
                                </a>
                            </li>
                            <li class="rd-dropdown-item">
                                <a class="rd-dropdown-link" href="<?php echo e(sc_route('compare')); ?>"><i class="fa fa-exchange"></i> <?php echo e(trans('front.compare')); ?> 
                                    <span class="count sc-compare"
                                    id="shopping-compare"><?php echo e(Cart::instance('compare')->count()); ?></span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <?php else: ?>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="#"><i class="fa fa-lock"></i> <?php echo e(trans('account.my_profile')); ?></a>
                        <ul class="rd-menu rd-navbar-dropdown">
                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="<?php echo e(sc_route('customer.index')); ?>"><i class="fa fa-user"></i> <?php echo e(trans('front.my_profile')); ?></a></li>
                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="<?php echo e(sc_route('logout')); ?>" rel="nofollow" onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> <?php echo e(trans('front.logout')); ?></a></li>
                            <li class="rd-dropdown-item">
                                <a class="rd-dropdown-link" href="<?php echo e(sc_route('wishlist')); ?>"><i class="fas fa-heart"></i> <?php echo e(trans('front.wishlist')); ?> 
                                    <span class="count sc-wishlist"
                                    id="shopping-wishlist"><?php echo e(Cart::instance('wishlist')->count()); ?></span>
                                </a>
                            </li>
                            <li class="rd-dropdown-item">
                                <a class="rd-dropdown-link" href="<?php echo e(sc_route('compare')); ?>"><i class="fa fa-exchange"></i> <?php echo e(trans('front.compare')); ?> 
                                    <span class="count sc-compare"
                                    id="shopping-compare"><?php echo e(Cart::instance('compare')->count()); ?></span>
                                </a>
                            </li>
                            <form id="logout-form" action="<?php echo e(sc_route('logout')); ?>" method="POST" style="display: none;">
                              <?php echo csrf_field(); ?>
                            </form>
                        </ul>
                    </li>
                    <?php endif; ?>


                    <?php if(count($sc_languages)>1): ?>
                    <li class="rd-nav-item">
                        <a class="rd-nav-link" href="#">
                            <img src="<?php echo e(asset($sc_languages[app()->getLocale()]['icon'])); ?>" style="height: 25px;"> <i class="fas fa-caret-down"></i>
                        </a>
                        <ul class="rd-menu rd-navbar-dropdown">
                            <?php $__currentLoopData = $sc_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="rd-dropdown-item">
                                <a class="rd-dropdown-link" href="<?php echo e(sc_route('locale', ['code' => $key])); ?>">
                                    <img src="<?php echo e(asset($language['icon'])); ?>" style="height: 25px;"> <?php echo e($language['name']); ?>

                                </a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>
                    <?php endif; ?>

                    <?php if(count($sc_currencies)>1): ?>
                    <li class="rd-nav-item">
                        <a class="rd-nav-link" href="#">
                            <?php echo e(sc_currency_info()['name']); ?> <i class="fas fa-caret-down"></i>
                        </a>
                        <ul class="rd-menu rd-navbar-dropdown">
                            <?php $__currentLoopData = $sc_currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="rd-dropdown-item" <?php echo e(($currency->code ==  sc_currency_info()['code']) ? 'disabled': ''); ?>>
                                <a class="rd-dropdown-link" href="<?php echo e(sc_route('currency', ['code' => $currency->code])); ?>">
                                    <?php echo e($currency->name); ?>

                                </a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>
                    <?php endif; ?>

                  </ul>
                </div>

                <div class="rd-navbar-main-element">
                  <!-- RD Navbar Search-->
                  <div class="rd-navbar-search rd-navbar-search-2">
                    <button class="rd-navbar-search-toggle rd-navbar-fixed-element-3" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                    <form class="rd-search" action="<?php echo e(sc_route('search')); ?>"  method="GET">
                      <div class="form-wrap">
                        <input class="rd-navbar-search-form-input form-input"  type="text" name="keyword"  placeholder="<?php echo e(trans('front.search_form.keyword')); ?>"/>
                        <button class="rd-search-form-submit" type="submit"></button>
                      </div>
                    </form>
                  </div>
                  <!-- RD Navbar Basket-->
                  <div class="rd-navbar-basket-wrap">
                    <a href="<?php echo e(sc_route('cart')); ?>">
                    <button class="rd-navbar-basket fl-bigmug-line-shopping202">
                      <span class="count sc-cart" id="shopping-cart"><?php echo e(Cart::instance('default')->count()); ?></span>
                    </button>
                    </a>
                  </div>
                  <a title="<?php echo e(trans('front.cart_title')); ?>" style="margin-top:10px;" class="rd-navbar-basket rd-navbar-basket-mobile fl-bigmug-line-shopping202 rd-navbar-fixed-element-2" href="<?php echo e(sc_route('cart')); ?>">
                    <span class="count sc-cart"><?php echo e(Cart::instance('default')->count()); ?></span>
                 </a>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
<?php /**PATH /var/www/automobile.in/resources/views/templates/s-cart-light/block_header.blade.php ENDPATH**/ ?>