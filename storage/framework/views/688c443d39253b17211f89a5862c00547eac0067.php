      <!-- User Account: style can be found in dropdown.less -->
      <li class="nav-item dropdown user-menu">

        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
          <img src="<?php echo e(Admin::user()->avatar?asset(Admin::user()->avatar):asset('admin/avatar/user.jpg')); ?>" class="user-image" alt="User Image">
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <div class="text-center">
            <img src="<?php echo e(Admin::user()->avatar?asset(Admin::user()->avatar):asset('admin/avatar/user.jpg')); ?>" class="img-circle" alt="<?php echo e(Admin::user()->name); ?>">
            <div>
              <?php echo e(Admin::user()->name); ?><br>
              <small><?php echo e(trans('user.member_since')); ?> <?php echo e(Admin::user()->created_at); ?></small>
            </div>
          </div>
          <!-- Menu Footer-->
          <div class="user-footer">
            <div class="float-left">
              <a href="<?php echo e(sc_route('admin.setting')); ?>" class="btn btn-default btn-flat"><?php echo e(trans('admin.setting')); ?></a>
            </div>
            <div class="float-right">
              <a href="<?php echo e(sc_route('admin.logout')); ?>" class="btn btn-default btn-flat"><?php echo e(trans('admin.logout')); ?></a>
            </div>
          </div>
        </div>
      </li><?php /**PATH /var/www/automobile.in/vendor/s-cart/core/src/Admin/Views/component/admin_profile.blade.php ENDPATH**/ ?>