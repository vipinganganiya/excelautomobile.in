<footer class="main-footer">
  <?php if(!sc_config_admin('ADMIN_FOOTER_OFF')): ?>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 
      <?php echo e(config('s-cart.sub-version')); ?>

    </div>
    <strong>Copyright &copy; <?php echo e(date('Y')); ?> <a href="<?php echo e(config('s-cart.homepage')); ?>">SCart: <?php echo e(config('s-cart.title')); ?></a>.</strong> All rights
    reserved.
  <?php endif; ?>
</footer>
<?php /**PATH /var/www/excelautomobile.in/resources/views/admin/footer.blade.php ENDPATH**/ ?>