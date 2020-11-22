<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
        <?php echo e(trans('admin.theme')); ?>

    </a>
    <div class="dropdown-menu dropdown-menu-left p-0">
    <?php $__currentLoopData = config('admin.theme'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="<?php echo e(sc_route('admin.theme', ['theme' => $theme])); ?>" class="dropdown-item  <?php echo e((config('admin.theme_default') == $theme) ? 'disabled active':''); ?>">
        <div class="hover">
        <?php echo e(ucfirst($theme)); ?>

        </div>
    </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</li><?php /**PATH /var/www/excelautomobile.in/resources/views/admin/component/admin_theme.blade.php ENDPATH**/ ?>