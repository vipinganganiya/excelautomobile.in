  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand <?php echo e((Admin::isLoginPage() || Admin::isLogoutPage())?'login-page':''); ?> <?php echo e(config($styleDefine.'.main-header')); ?>">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
        <?php echo $__env->make($templatePathAdmin.'component.language', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make($templatePathAdmin.'component.admin_theme', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </ul>

    <?php if(\Admin::user()->checkUrlAllowAccess(route('admin_order.index'))): ?>
    <!-- SEARCH FORM -->
    <form action="<?php echo e(sc_route('admin_order.index')); ?>" method="get" class="form-inline ml-3 d-none d-sm-block" >
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

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <?php if(sc_config_global('MultiStorePro')): ?>
        <?php echo $__env->make($templatePathAdmin.'component.admin_select_store', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make($templatePathAdmin.'component.store_list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php else: ?>
      <a class="nav-link" href="<?php echo e(sc_route('home')); ?>" target=_new>
        <i class="fas fa-home"></i>
      </a> 
      <?php endif; ?>

      <?php echo $__env->make($templatePathAdmin.'component.notice', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <?php echo $__env->make($templatePathAdmin.'component.admin_profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


      

    </ul>
  </nav>
  <!-- /.navbar -->
<?php /**PATH /var/www/excelautomobile.in/resources/views/admin/header.blade.php ENDPATH**/ ?>