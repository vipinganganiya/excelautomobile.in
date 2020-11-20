<?php
    $languages     = sc_language_all();
?>

    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
            <img src="<?php echo e(asset($languages[session('locale')??app()->getLocale()]['icon'])); ?>" style="height: 25px;"> 
        </a>
        <div class="dropdown-menu dropdown-menu-left p-0" style="left: inherit; left: 0px;">
            <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(sc_route('admin.locale', ['code' => $key])); ?>" class="dropdown-item <?php echo e(((session('locale')??app()->getLocale()) == $key)?' disabled':''); ?>">
            <div class="hover">
                <img src="<?php echo e(asset($language['icon'])); ?>" style="height: 25px;"> <?php echo e($language['name']); ?>

            </div>
            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </li><?php /**PATH /var/www/automobile.in/vendor/s-cart/core/src/Admin/Views/component/language.blade.php ENDPATH**/ ?>