
<?php
    $orderNew = \SCart\Core\Admin\Models\AdminOrder::getCountOrderNew()
?>
<li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#">
      <i class="far fa-bell"></i>
      <span class="badge badge-warning navbar-badge"><?php echo e($orderNew); ?></span>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
      <span class="dropdown-item dropdown-header"><?php echo e(trans('admin.menu_notice.new_order',['total'=> $orderNew])); ?></span>
      <div class="dropdown-divider"></div>
      <?php if(sc_config_global('MultiStorePro')): ?>
        <a href="<?php echo e(sc_route('admin_order_store.index')); ?>?order_status=1" class="dropdown-item dropdown-footer"><?php echo e(trans('admin.menu_notice.view_all')); ?></a>
      <?php else: ?>
        <a href="<?php echo e(sc_route('admin_order.index')); ?>?order_status=1" class="dropdown-item dropdown-footer"><?php echo e(trans('admin.menu_notice.view_all')); ?></a>
      <?php endif; ?>
    </div>
  </li>
<?php /**PATH /var/www/excelautomobile.in/resources/views/admin/component/notice.blade.php ENDPATH**/ ?>