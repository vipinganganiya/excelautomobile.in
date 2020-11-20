<footer class="main-footer">
  <?php if(!sc_config_admin('ADMIN_FOOTER_OFF')): ?>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 
      <?php echo e(config('s-cart.sub-version')); ?>

    </div>
    <strong>Copyright &copy; <?php echo e(date('Y')); ?> <a href="<?php echo e(config('s-cart.homepage')); ?>"> <?php echo e(sc_store('title')); ?></a>.</strong> All rights
    reserved.
  <?php endif; ?>
</footer>
<?php /**PATH /var/www/automobile.in/vendor/s-cart/core/src/Admin/Views/footer.blade.php ENDPATH**/ ?>