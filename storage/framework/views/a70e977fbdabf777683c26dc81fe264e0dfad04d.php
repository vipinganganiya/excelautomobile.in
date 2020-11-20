
<div class="card">
  <div class="card-body table-responsive">
   <table class="table table-hover box-body text-wrap table-bordered">
     <tbody>

      <tr>
        <td><?php echo e(trans('env.ADMIN_NAME')); ?></td>
        <td><a href="#" class="editable-required editable editable-click" data-name="ADMIN_NAME" data-type="text" data-pk="" data-source="" data-url="<?php echo e(sc_route('admin_config.update')); ?>" data-title="<?php echo e(trans('env.ADMIN_NAME')); ?>" data-value="<?php echo e(sc_config('ADMIN_NAME', $storeId)); ?>" data-original-title="" title=""></a></td>
      </tr>

      <tr>
        <td><?php echo e(trans('env.ADMIN_TITLE')); ?></td>
        <td><a href="#" class="editable-required editable editable-click" data-name="ADMIN_TITLE" data-type="text" data-pk="" data-source="" data-url="<?php echo e(sc_route('admin_config.update')); ?>" data-title="<?php echo e(trans('env.ADMIN_TITLE')); ?>" data-value="<?php echo e(sc_config('ADMIN_TITLE', $storeId)); ?>" data-original-title="" title=""></a></td>
      </tr>

      <tr>
        <td><?php echo e(trans('env.ADMIN_LOGO')); ?></td>
        <td><a href="#" class="editable-required editable editable-click" data-name="ADMIN_LOGO" data-type="text" data-pk="" data-source="" data-url="<?php echo e(sc_route('admin_config.update')); ?>" data-title="<?php echo e(trans('env.ADMIN_LOGO')); ?>" data-value="<?php echo e(sc_config('ADMIN_LOGO', $storeId)); ?>" data-original-title="" title=""></a></td>
      </tr>
      <tr>
        <td><?php echo e(trans('env.ADMIN_FOOTER_OFF')); ?></td>
        <td><input class="check-data-config" data-store="<?php echo e($storeId); ?>" type="checkbox" name="ADMIN_FOOTER_OFF"  <?php echo e(sc_config('ADMIN_FOOTER_OFF', $storeId) ? "checked":""); ?>>
      </tr>

     </tbody>
   </table>
  </div>
</div><?php /**PATH /var/www/automobile.in/vendor/s-cart/core/src/Admin/Views/screen/config_store/config_admin_other.blade.php ENDPATH**/ ?>