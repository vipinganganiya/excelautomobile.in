<div class="product-price-wrap">
<?php switch($kind):
    case (SC_PRODUCT_GROUP): ?>
    <div class="product-price"><?php echo trans('product.price_group'); ?></div>
        <?php break; ?>
    <?php default: ?>
        <?php if($price == $priceFinal): ?>
            <div class="product-price"><?php echo sc_currency_render($price); ?></div>
        <?php else: ?>
            <div class="product-price product-price-old"><?php echo sc_currency_render($price); ?></div>
            <div class="product-price"><?php echo sc_currency_render($priceFinal); ?></div>
        <?php endif; ?>
<?php endswitch; ?>
</div>    <?php /**PATH /var/www/automobile.in/resources/views/templates/s-cart-light/common/show_price.blade.php ENDPATH**/ ?>