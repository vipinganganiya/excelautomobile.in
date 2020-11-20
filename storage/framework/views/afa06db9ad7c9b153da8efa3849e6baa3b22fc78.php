

    <div class="row">

      <div class="col-md-6">
    
        <div class="card">
          <div class="card-header with-border">
            <h3 class="card-title"><?php echo e(trans('email.admin.config_mode')); ?></h3>
          </div>
    
          <div class="card-body table-responsivep-0">
             <table class="table table-hover box-body text-wrap table-bordered">
               <tbody>
                 <?php if(!empty($emailConfig['email_action'])): ?>
                 <?php $__currentLoopData = $emailConfig['email_action']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $config): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <tr>
                   <td><?php echo sc_language_render($config->detail); ?></td>
                   <td><input class="check-data-config" data-store="<?php echo e($storeId); ?>"  type="checkbox" name="<?php echo e($config->key); ?>"  <?php echo e($config->value?"checked":""); ?>></td>
                 </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 <?php endif; ?>
                 <tr>
                  <td><?php echo e(trans('email.email_action.forgot_password')); ?></td>
                  <td><input class="check-data-config" data-store="<?php echo e($storeId); ?>"  type="checkbox" checked disabled></td>
                </tr>
               </tbody>
               <tfoot>
                <tr>
                  <td colspan="2"><?php echo trans('email.admin.help_note'); ?></td>
                </tr>
              </tfoot>
             </table>
          </div>
        </div>
      </div>
    
    
      <div class="col-md-6">
    
        <div class="card">
          <div class="card-header with-border">
            <h3 class="card-title"><?php echo e(trans('email.admin.config_smtp')); ?></h3>
          </div>
    
          <div class="card-body table-responsivep-0">
             <table class="table table-hover box-body text-wrap table-bordered">
             <tbody>
               <?php if(!empty($emailConfig['smtp_config'])): ?>
               <?php $__currentLoopData = $emailConfig['smtp_config']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $config): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <?php if($config->key == 'smtp_security'): ?>
                <tr>
                  <td><?php echo e(sc_language_render($config->detail)); ?></td>
                  <td><a href="#" class="editable editable-click" data-name="<?php echo e($config->key); ?>" data-type="select" data-pk="" data-source="<?php echo e(json_encode($smtp_method)); ?>" data-url="<?php echo e(sc_route('admin_config.update')); ?>" data-title="<?php echo e(sc_language_render($config->detail)); ?>" data-value="<?php echo e($config->value); ?>" data-original-title="" title=""></a></td>
                </tr>             
               <?php elseif($config->key == 'smtp_port'): ?>
                 <tr>
                   <td><?php echo e(sc_language_render($config->detail)); ?></td>
                   <td align="left"><a href="#" class="editable editable-click" data-name="<?php echo e($config->key); ?>" data-type="number" data-pk="<?php echo e($config->key); ?>" data-source="" data-url="<?php echo e(sc_route('admin_config.update')); ?>" data-title="<?php echo e(sc_language_render($config->detail)); ?>" data-value="<?php echo e($config->value); ?>" data-original-title="" title=""></a></td>
                 </tr>
               <?php elseif($config->key == 'smtp_password' || $config->key == 'smtp_user'): ?>
                 <tr>
                   <td><?php echo e(sc_language_render($config->detail)); ?></td>
                   <td align="left"><a href="#" class="editable editable-click" data-name="<?php echo e($config->key); ?>" data-type="password" data-pk="<?php echo e($config->key); ?>" data-source="" data-url="<?php echo e(sc_route('admin_config.update')); ?>" data-title="<?php echo e(sc_language_render($config->detail)); ?>" data-value="<?php echo e((sc_admin_can_config()) ? $config->value: 'hidden'); ?>" data-original-title="" title=""></a></td>
                 </tr>
              <?php else: ?>
                 <tr>
                   <td><?php echo e(sc_language_render($config->detail)); ?></td>
                   <td align="left"><a href="#" class="editable editable-click" data-name="<?php echo e($config->key); ?>" data-type="text" data-pk="<?php echo e($config->key); ?>" data-source="" data-url="<?php echo e(sc_route('admin_config.update')); ?>" data-title="<?php echo e(sc_language_render($config->detail)); ?>" data-value="<?php echo e($config->value); ?>" data-original-title="" title=""></a></td>
                 </tr>
               <?php endif; ?>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php endif; ?>
             </tbody>
             </table>
          </div>
        </div>
      </div>
    
    </div>
<?php /**PATH /var/www/automobile.in/vendor/s-cart/core/src/Admin/Views/screen/config_store/config_mail.blade.php ENDPATH**/ ?>