<?php
    $totalOrder = \SCart\Core\Admin\Models\AdminOrder::count();
    $styleStatus = \SCart\Core\Admin\Models\AdminOrder::$mapStyleStatus;
?>
<?php if($totalOrder): ?>
<?php
    $arrStatus = \SCart\Core\Front\Models\ShopOrderStatus::pluck('name','id')->all();
    $groupOrder = (new \SCart\Core\Front\Models\ShopOrder)->all()->groupBy('status');
?>
    <li id="summary">
    <ul>
        <?php $__currentLoopData = $groupOrder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status => $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $style = $styleStatus[$status]??'light';
            $percent = floor($element->count() * 100/$totalOrder);
        ?>
            <li class="footer-static">
                <div>Orders <?php echo e($arrStatus[$status]??''); ?> <span class="float-right"><?php echo e($percent); ?>%</span></div>
                <div class="progress">
                    <div class="progress-bar bg-<?php echo e($style); ?>" role="progressbar" aria-valuenow="<?php echo e($percent); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e($percent); ?>%"> <span class="sr-only"><?php echo e($percent); ?>%</span></div>
                </div>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ul>
</li>

<?php endif; ?>
<?php /**PATH /var/www/automobile.in/vendor/s-cart/core/src/Admin/Views/component/sidebar_bottom.blade.php ENDPATH**/ ?>