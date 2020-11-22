   <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-light-pink elevation-4 sidebar-no-expand">
    <!-- Brand Logo -->
    <a href="<?php echo e(sc_route('admin.home')); ?>" class="brand-link navbar-secondary">
      S-Cart
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar <?php echo e(config($styleDefine.'.sidebar')); ?>">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo e(Admin::user()->avatar?asset(Admin::user()->avatar):asset('admin/avatar/user.jpg')); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo e(Admin::user()->name); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-legacy" data-widget="treeview" role="menu" >

          <?php if(\Admin::user()->checkUrlAllowAccess(route('admin_order.index'))): ?>
          <!-- SEARCH FORM -->
          <form action="<?php echo e(sc_route('admin_order.index')); ?>" method="get" class="form-inline m-1 d-block d-sm-none" >
            <div class="input-group input-group-sm">
              <input name="keyword" class="form-control form-control-navbar" type="search" placeholder="<?php echo e(trans('order.search')); ?>" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </form>
          <?php endif; ?>

        <?php
          $menus = Admin::getMenuVisible();
        ?>

<?php if(count($menus)): ?>

      <?php $__currentLoopData = $menus[0]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level0): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <?php if(!empty($menus[$level0->id])): ?>
        <li class="nav-link header">
          <i class="nav-icon  <?php echo e($level0->icon); ?> "></i> 
          <p class="sub-header"> <?php echo sc_language_render($level0->title); ?></p>
        </li>
          <?php $__currentLoopData = $menus[$level0->id]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($level1->uri): ?>
            <li class="nav-item <?php echo e(\Admin::checkUrlIsChild(url()->current(), sc_url_render($level1->uri)) ? 'active' : ''); ?>">
              <a href="<?php echo e($level1->uri?sc_url_render($level1->uri):'#'); ?>" class="nav-link">
                <i class="nav-icon <?php echo e($level1->icon); ?>"></i>
                <p>
                  <?php echo sc_language_render($level1->title); ?>

                </p>
              </a>
            </li>
            <?php else: ?>

          
          <?php if(!empty($menus[$level1->id])): ?>
          <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon  <?php echo e($level1->icon); ?> "></i>
                <p>
                  <?php echo sc_language_render($level1->title); ?>

                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>

              <ul class="nav nav-treeview">
                <?php $__currentLoopData = $menus[$level1->id]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if($level2->uri): ?>
                  <li class="nav-item <?php echo e(\Admin::checkUrlIsChild(url()->current(), sc_url_render($level2->uri)) ? 'active' : ''); ?>">
                    <a href="<?php echo e($level2->uri?sc_url_render($level2->uri):'#'); ?>" class="nav-link">
                      <i class="<?php echo e($level2->icon); ?> nav-icon"></i>
                      <p><?php echo sc_language_render($level2->title); ?></p>
                    </a>
                  </li>
                  <?php else: ?>

                
                <?php if(!empty($menus[$level2->id])): ?>
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon  <?php echo e($level2->icon); ?> "></i>
                      <p>
                        <?php echo sc_language_render($level2->title); ?>

                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>

                  <ul class="nav nav-treeview">
                    <?php $__currentLoopData = $menus[$level2->id]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php if($level3->uri): ?>
                        <li class="nav-item <?php echo e(\Admin::checkUrlIsChild(url()->current(), sc_url_render($level3->uri)) ? 'active' : ''); ?>">
                          <a href="<?php echo e($level3->uri?sc_url_render($level3->uri):'#'); ?>" class="nav-link">
                            <i class="<?php echo e($level3->icon); ?> nav-icon"></i>
                            <p><?php echo sc_language_render($level3->title); ?></p>
                          </a>
                        </li>
                      <?php else: ?>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon  <?php echo e($level3->icon); ?> "></i>
                          <p>
                            <?php echo sc_language_render($level3->title); ?>

                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                      </li>
                      <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>                    
                  </li>
                  <?php endif; ?>
                  

                  <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
              </li>
            <?php endif; ?>
            

            <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        

          <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
      <?php endif; ?>


      
      <?php if(\Admin::user()->checkUrlAllowAccess(route('admin_order.index'))): ?>
        <?php echo $__env->make($templatePathAdmin.'component.sidebar_bottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>


      </ul>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <?php /**PATH /var/www/excelautomobile.in/resources/views/admin/sidebar.blade.php ENDPATH**/ ?>