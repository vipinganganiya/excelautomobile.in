<?php $__env->startSection('main'); ?>
   <div class="row">
      <div class="col-md-12">
          <div class="box-body">
            <div class="error-page text-center">
                <h2 class="text-red">403 - <?php echo e(trans('admin.deny_content')); ?></h2>
                <?php if($url): ?>
                <span><h4><i class="fa fa-warning text-red" aria-hidden="true"></i> <?php echo e(trans('admin.deny_msg')); ?></h4></span>
                <span><strong>URL:</strong> <code><?php echo e($url); ?></code> - <strong>Method:</strong> <code><?php echo e($method); ?></code></span>
                <?php endif; ?>
            </div>
        </div>
      </div>
  </div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('styles'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
<?php if($url): ?>
<script>
  window.history.pushState("", "", '<?php echo e($url); ?>');
</script>
<?php endif; ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($templatePathAdmin.'layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/automobile.in/vendor/s-cart/core/src/Admin/Views/deny.blade.php ENDPATH**/ ?>