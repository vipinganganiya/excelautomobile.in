<?php if(!empty($dataTotal) && count($dataTotal)): ?>
<table class="table box table-bordered" id="showTotal">
    <?php $__currentLoopData = $dataTotal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($element['code']=='total'): ?>
            <tr class="showTotal" style="background:#f5f3f3;font-weight: bold;">
                <th><?php echo $element['title']; ?></th>
                <td style="text-align: right" id="<?php echo e($element['code']); ?>">
                    <?php echo e($element['text']); ?>

                </td>
            </tr>
        <?php elseif($element['value'] !=0): ?>
            <tr class="showTotal">
                <th><?php echo $element['title']; ?></th>
                <td style="text-align: right" id="<?php echo e($element['code']); ?>">
                    <?php echo e($element['text']); ?>

                </td>
            </tr>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php endif; ?>
<?php /**PATH /var/www/automobile.in/resources/views/templates/s-cart-light/common/render_total.blade.php ENDPATH**/ ?>