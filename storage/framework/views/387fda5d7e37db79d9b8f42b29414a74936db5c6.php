<?php
/*
$layout_page = shop_cart
**Variables:**
- $cart: no paginate
- $shippingMethod: string
- $paymentMethod: string
- $totalMethod: array
- $dataTotal: array
- $shippingAddress: array
- $countries: array
- $attributesGroup: array
*/
?>



<?php $__env->startSection('block_main'); ?>
<section class="section section-xl bg-default text-md-left">
    <div class="container">
        <div class="row">
            <?php if(count($cart) ==0): ?>

            <div class="col-md-12">
                <?php echo trans('cart.cart_empty'); ?>!
            </div>

            <?php else: ?>

            
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table box table-bordered">
                        <thead>
                            <tr style="background: #eaebec">
                                <th style="width: 50px;">No.</th>
                                <th style="width: 100px;"><?php echo e(trans('product.sku')); ?></th>
                                <th><?php echo e(trans('product.name')); ?></th>
                                <th><?php echo e(trans('product.price')); ?></th>
                                <th><?php echo e(trans('product.quantity')); ?></th>
                                <th><?php echo e(trans('product.total_price')); ?></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $n = (isset($n)?$n:0);
                                    $n++;
                                    // Check product in cart
                                    $product = $modelProduct->start()->getDetail($item->id, null, $item->storeId);
                                    if(!$product) {
                                        continue;
                                    }
                                    // End check product in cart
                                ?>
                            <tr class="row_cart form-group <?php echo e(session('arrErrorQty')[$product->id] ?? ''); ?><?php echo e((session('arrErrorQty')[$product->id] ?? 0) ? ' has-error' : ''); ?>">
                                <td><?php echo e($n); ?></td>
                                <td><?php echo e($product->sku); ?></td>
                                <td>
                                    <a href="<?php echo e($product->getUrl()); ?>" class="row_cart-name">
                                        <img width="100" src="<?php echo e(asset($product->getImage())); ?>"
                                            alt="<?php echo e($product->name); ?>">
                                        <span>
                                            <?php echo e($product->name); ?><br />

                                            
                                            <?php if(sc_config_global('MultiStorePro') && config('app.storeId') == 1): ?>
                                            <div class="store-url"><a href="<?php echo e($product->goToStore()); ?>"><i class="fa fa-shopping-bag" aria-hidden="true"></i> <?php echo e(trans('front.store').' '. $product->store_id); ?></a>
                                            </div>
                                            <?php endif; ?>
                                            
                                            
                                            
                                            <?php if($item->options->count()): ?>
                                            <?php $__currentLoopData = $item->options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $groupAtt => $att): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <b><?php echo e($attributesGroup[$groupAtt]); ?></b>: <?php echo sc_render_option_price($att); ?>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                            
                                        </span>
                                    </a>
                                </td>

                                <td><?php echo $product->showPrice(); ?></td>

                                <td class="cart-col-qty">
                                    <div class="cart-qty">
                                        <input style="width: 150px; margin: 0 auto" type="number" data-id="<?php echo e($item->id); ?>"
                                            data-rowid="<?php echo e($item->rowId); ?>" data-store_id="<?php echo e($product->store_id); ?>" onChange="updateCart($(this));"
                                            class="item-qty form-control" name="qty-<?php echo e($item->id); ?>" value="<?php echo e($item->qty); ?>">
                                    </div>
                                    <span class="text-danger item-qty-<?php echo e($item->id); ?>" style="display: none;"></span>
                                    <?php if(session('arrErrorQty')[$product->id] ?? 0): ?>
                                    <span class="help-block">
                                        <br><?php echo e(trans('cart.minimum_value', ['value' => session('arrErrorQty')[$product->id]])); ?>

                                    </span>
                                    <?php endif; ?>
                                </td>

                                <td align="right">
                                    <?php echo e(sc_currency_render($item->subtotal)); ?>

                                </td>

                                <td align="center">
                                    <a onClick="return confirm('Confirm?')" title="Remove Item" alt="Remove Item"
                                        class="cart_quantity_delete"
                                        href="<?php echo e(sc_route("cart.remove",['id'=>$item->rowId])); ?>">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
            

            
            <div class="col-md-12">
                <div class="pull-left">
                    <button class="btn btn-default btn-back" type="button"
                        onClick="location.href='<?php echo e(sc_route('home')); ?>'"><i class="fa fa-arrow-left"></i>
                        <?php echo e(trans('cart.back_to_shop')); ?></button>
                </div>
                <div class="pull-right">
                    <button class="btn btn-delete-all" type="button"
                        onClick="if(confirm('Confirm ?')) window.location.href='<?php echo e(sc_route('cart.clear')); ?>';">
                        <i class="fa fa-window-close" aria-hidden="true"></i>
                        <?php echo e(trans('cart.remove_all')); ?></button>
                </div>
            </div>
            

            <div class="col-md-12">
                <form class="sc-shipping-address" id="form-process" role="form" method="POST" action="<?php echo e(sc_route('cart.process')); ?>">
                    
                    <?php echo csrf_field(); ?>
                    
                    <div class="row">
                        <div class="col-md-6">

                            
                            <?php if(auth()->user()): ?>
                                <div class="">
                                    <select class="form-control" name="address_process" style="width: 100%;" id="addressList">
                                        <option value=""><?php echo e(trans('cart.change_address')); ?></option>
                                        <?php $__currentLoopData = $addressList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($address->id); ?>" <?php echo e((old('address_process') ==  $address->id) ? 'selected':''); ?>>- <?php echo e($address->first_name. ' '.$address->last_name.', '.$address->address1.' '.$address->address2); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <option value="new" <?php echo e((old('address_process') ==  'new') ? 'selected':''); ?>><?php echo e(trans('cart.add_new_address')); ?></option>
                                    </select>
                                </div>
                            <?php endif; ?>
                            
                            
                            
                            <table class="table table-borderless table-responsive">
                                <tr width=100%>
                                    <?php if(sc_config('customer_lastname')): ?>
                                        <td class="form-group<?php echo e($errors->has('first_name') ? ' has-error' : ''); ?>">
                                            <label for="phone" class="control-label"><i class="fa fa-user"></i>
                                                <?php echo e(trans('cart.first_name')); ?>:</label>
                                            <input class="form-control" name="first_name" type="text"
                                                placeholder="<?php echo e(trans('cart.first_name')); ?>"
                                                value="<?php echo e(old('first_name', $shippingAddress['first_name'])); ?>">
                                            <?php if($errors->has('first_name')): ?>
                                            <span class="help-block"><?php echo e($errors->first('first_name')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="form-group<?php echo e($errors->has('last_name') ? ' has-error' : ''); ?>">
                                            <label for="phone" class="control-label"><i class="fa fa-user"></i>
                                                <?php echo e(trans('cart.last_name')); ?>:</label>
                                            <input class="form-control" name="last_name" type="text" placeholder="<?php echo e(trans('cart.last_name')); ?>"
                                                value="<?php echo e(old('last_name',$shippingAddress['last_name'])); ?>">
                                            <?php if($errors->has('last_name')): ?>
                                            <span class="help-block"><?php echo e($errors->first('last_name')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                    <?php else: ?>
                                        <td colspan="2"
                                            class="form-group<?php echo e($errors->has('first_name') ? ' has-error' : ''); ?>">
                                            <label for="phone" class="control-label"><i class="fa fa-user"></i>
                                                <?php echo e(trans('cart.name')); ?>:</label>
                                            <input class="form-control" name="first_name" type="text" placeholder="<?php echo e(trans('cart.name')); ?>"
                                                value="<?php echo e(old('first_name',$shippingAddress['first_name'])); ?>">
                                            <?php if($errors->has('first_name')): ?>
                                            <span class="help-block"><?php echo e($errors->first('first_name')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                    <?php endif; ?>
                                </tr>

                                <?php if(sc_config('customer_name_kana')): ?>
                                    <tr>
                                    <td class="form-group<?php echo e($errors->has('first_name_kana') ? ' has-error' : ''); ?>">
                                        <label for="phone" class="control-label"><i class="fa fa-user"></i>
                                            <?php echo e(trans('cart.first_name_kana')); ?>:</label>
                                        <input class="form-control" name="first_name_kana" type="text"
                                            placeholder="<?php echo e(trans('cart.first_name_kana')); ?>"
                                            value="<?php echo e(old('first_name_kana', $shippingAddress['first_name_kana'])); ?>">
                                        <?php if($errors->has('first_name_kana')): ?>
                                        <span class="help-block"><?php echo e($errors->first('first_name_kana')); ?></span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="form-group<?php echo e($errors->has('last_name_kana') ? ' has-error' : ''); ?>">
                                        <label for="phone" class="control-label"><i class="fa fa-user"></i>
                                            <?php echo e(trans('cart.last_name_kana')); ?>:</label>
                                        <input class="form-control" name="last_name_kana" type="text" placeholder="<?php echo e(trans('cart.last_name_kana')); ?>"
                                            value="<?php echo e(old('last_name_kana',$shippingAddress['last_name_kana'])); ?>">
                                        <?php if($errors->has('last_name_kana')): ?>
                                        <span class="help-block"><?php echo e($errors->first('last_name_kana')); ?></span>
                                        <?php endif; ?>
                                    </td>
                                    </tr>
                                <?php endif; ?>

                                <tr>
                                    <?php if(sc_config('customer_phone')): ?>
                                        <td class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                            <label for="email" class="control-label"><i class="fa fa-envelope"></i>
                                                <?php echo e(trans('cart.email')); ?>:</label>
                                            <input class="form-control" name="email" type="text" placeholder="<?php echo e(trans('cart.email')); ?>"
                                                value="<?php echo e(old('email', $shippingAddress['email'])); ?>">
                                            <?php if($errors->has('email')): ?>
                                                <span class="help-block"><?php echo e($errors->first('email')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="form-group<?php echo e($errors->has('phone') ? ' has-error' : ''); ?>">
                                            <label for="phone" class="control-label"><i class="fa fa-phone"
                                                    aria-hidden="true"></i> <?php echo e(trans('cart.phone')); ?>:</label>
                                            <input class="form-control" name="phone" type="text" placeholder="<?php echo e(trans('cart.phone')); ?>"
                                                value="<?php echo e(old('phone',$shippingAddress['phone'])); ?>">
                                            <?php if($errors->has('phone')): ?>
                                                <span class="help-block"><?php echo e($errors->first('phone')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                    <?php else: ?>
                                        <td colspan="2" class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                            <label for="email" class="control-label"><i class="fa fa-envelope"></i>
                                                <?php echo e(trans('cart.email')); ?>:</label>
                                            <input class="form-control" name="email" type="text" placeholder="<?php echo e(trans('cart.email')); ?>"
                                                value="<?php echo e(old('email',$shippingAddress['email'])); ?>">
                                            <?php if($errors->has('email')): ?>
                                                <span class="help-block"><?php echo e($errors->first('email')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                    <?php endif; ?>
                                </tr>


                                <?php if(sc_config('customer_country')): ?>
                                <tr>
                                    <td colspan="2" class="form-group<?php echo e($errors->has('country') ? ' has-error' : ''); ?>">
                                        <label for="country" class="control-label"><i class="fas fa-globe"></i>
                                            <?php echo e(trans('cart.country')); ?>:</label>
                                        <?php
                                            $ct = old('country',$shippingAddress['country']);
                                        ?>
                                        <select class="form-control country " style="width: 100%;" name="country">
                                            <option value="">__<?php echo e(trans('cart.country')); ?>__</option>
                                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($k); ?>" <?php echo e(($ct ==$k) ? 'selected':''); ?>><?php echo e($v); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php if($errors->has('country')): ?>
                                            <span class="help-block">
                                                <?php echo e($errors->first('country')); ?>

                                            </span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endif; ?>


                                <tr>
                                    <?php if(sc_config('customer_postcode')): ?>
                                        <td class="form-group <?php echo e($errors->has('postcode') ? ' has-error' : ''); ?>">
                                            <label for="postcode" class="control-label"><i class="fa fa-tablet"></i>
                                                <?php echo e(trans('cart.postcode')); ?>:</label>
                                            <input class="form-control" name="postcode" type="text" placeholder="<?php echo e(trans('cart.postcode')); ?>"
                                                value="<?php echo e(old('postcode',$shippingAddress['postcode'])); ?>">
                                            <?php if($errors->has('postcode')): ?>
                                                <span class="help-block"><?php echo e($errors->first('postcode')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                    <?php endif; ?>

                                    <?php if(sc_config('customer_company')): ?>
                                        <td class="form-group<?php echo e($errors->has('company') ? ' has-error' : ''); ?>">
                                            <label for="company" class="control-label"><i class="fa fa-university"></i>
                                                <?php echo e(trans('cart.company')); ?></label>
                                            <input class="form-control" name="company" type="text" placeholder="<?php echo e(trans('cart.company')); ?>"
                                                value="<?php echo e(old('company',$shippingAddress['company'])); ?>">
                                            <?php if($errors->has('company')): ?>
                                                <span class="help-block"><?php echo e($errors->first('company')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                    <?php endif; ?>
                                </tr>

                                <tr>
                                    <?php if(sc_config('customer_address2')): ?>
                                        <td class="form-group <?php echo e($errors->has('address1') ? ' has-error' : ''); ?>">
                                            <label for="address1" class="control-label"><i class="fa fa-list-ul"></i>
                                                <?php echo e(trans('cart.address1')); ?>:</label>
                                            <input class="form-control" name="address1" type="text" placeholder="<?php echo e(trans('cart.address1')); ?>"
                                                value="<?php echo e(old('address1',$shippingAddress['address1'])); ?>">
                                            <?php if($errors->has('address1')): ?>
                                                <span class="help-block"><?php echo e($errors->first('address1')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="form-group <?php echo e($errors->has('address2') ? ' has-error' : ''); ?>">
                                            <label for="address2" class="control-label"><i class="fa fa-list-ul"></i>
                                                <?php echo e(trans('cart.address2')); ?></label>
                                            <input class="form-control" name="address2" type="text" placeholder="<?php echo e(trans('cart.address2')); ?>"
                                                value="<?php echo e(old('address2',$shippingAddress['address2'])); ?>">
                                            <?php if($errors->has('address2')): ?>
                                            <span class="help-block"><?php echo e($errors->first('address2')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                    <?php else: ?>
                                        <?php if(sc_config('customer_address1')): ?>
                                            <td colspan="2"
                                                class="form-group <?php echo e($errors->has('address1') ? ' has-error' : ''); ?>">
                                                <label for="address1" class="control-label"><i class="fa fa-list-ul"></i>
                                                    <?php echo e(trans('cart.address')); ?>:</label>
                                                <input class="form-control" name="address1" type="text" placeholder="<?php echo e(trans('cart.address')); ?>"
                                                    value="<?php echo e(old('address1',$shippingAddress['address1'])); ?>">
                                                <?php if($errors->has('address1')): ?>
                                                    <span class="help-block"><?php echo e($errors->first('address1')); ?></span>
                                                <?php endif; ?>
                                            </td>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </tr>

                                <tr>
                                    <td colspan="2">
                                        <label class="control-label"><i class="fa fa-calendar-o"></i>
                                            <?php echo e(trans('cart.note')); ?>:</label>
                                        <textarea class="form-control" rows="5" name="comment"
                                            placeholder="<?php echo e(trans('cart.note')); ?>...."><?php echo e(old('comment','')); ?></textarea>
                                    </td>
                                </tr>

                            </table>
                            
                        </div>

                        <div class="col-md-6">
                            
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <?php if(view()->exists($sc_templatePath.'.common.render_total')): ?>
                                        <?php echo $__env->make($sc_templatePath.'.common.render_total', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php endif; ?>
                                    

                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div
                                                class="form-group <?php echo e($errors->has('totalMethod') ? ' has-error' : ''); ?>">
                                                <?php if($errors->has('totalMethod')): ?>
                                                    <span class="help-block"><?php echo e($errors->first('totalMethod')); ?></span>
                                                <?php endif; ?>
                                            </div>

                                            <div class="form-group">
                                                <?php $__currentLoopData = $totalMethod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $plugin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if(view()->exists($plugin['pathPlugin'].'::render')): ?>
                                                        <?php echo $__env->make($plugin['pathPlugin'].'::render', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    </div>
                                    

<?php if(!sc_config('shipping_off')): ?>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div
                                                class="form-group <?php echo e($errors->has('shippingMethod') ? ' has-error' : ''); ?>">
                                                <h3 class="control-label"><i class="fa fa-truck" aria-hidden="true"></i>
                                                    <?php echo e(trans('cart.shipping_method')); ?>:<br></h3>
                                                <?php if($errors->has('shippingMethod')): ?>
                                                <span class="help-block"><?php echo e($errors->first('shippingMethod')); ?></span>
                                                <?php endif; ?>
                                            </div>

                                            <div class="form-group">
                                                <?php $__currentLoopData = $shippingMethod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $shipping): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="shippingMethod"
                                                            value="<?php echo e($shipping['key']); ?>"
                                                            <?php echo e((old('shippingMethod') == $key)?'checked':''); ?>

                                                            style="position: relative;"
                                                            <?php echo e(($shipping['permission'])?'':'disabled'); ?>>
                                                        <?php echo e($shipping['title']); ?>

                                                        (<?php echo e(sc_currency_render($shipping['value'])); ?>)
                                                    </label>
                                                </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    </div>
                                    
<?php endif; ?>

<?php if(!sc_config('payment_off')): ?>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div
                                                class="form-group <?php echo e($errors->has('paymentMethod') ? ' has-error' : ''); ?>">
                                                <h3 class="control-label"><i class="fa fa-credit-card-alt"></i>
                                                    <?php echo e(trans('cart.payment_method')); ?>:<br></h3>
                                                <?php if($errors->has('paymentMethod')): ?>
                                                <span class="help-block"><?php echo e($errors->first('paymentMethod')); ?></span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group cart-payment-method">
                                                <?php $__currentLoopData = $paymentMethod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="paymentMethod"
                                                            value="<?php echo e($payment['key']); ?>"
                                                            <?php echo e((old('shippingMethod') == $key)?'checked':''); ?>

                                                            style="position: relative;"
                                                            <?php echo e(($payment['permission'])?'':'disabled'); ?>>
                                                            <label class="radio-inline" for="payment-<?php echo e($payment['key']); ?>">
                                                                <img title="<?php echo e($payment['title']); ?>"
                                                                    alt="<?php echo e($payment['title']); ?>"
                                                                    src="<?php echo e(asset($payment['image'])); ?>">
                                                            </label>
                                                    </label>
                                                </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    </div>
                                    
<?php endif; ?>

                                </div>
                                
                            </div>
                            

                            
                            <div class="row" style="padding-bottom: 20px;">
                                <div class="col-md-12 text-center">
                                    <div class="pull-right">
                                        <?php echo $viewCaptcha ?? ''; ?>

                                        <button class="button button-lg button-secondary" type="submit" id="button-form-process"><?php echo e(trans('cart.checkout')); ?></button>
                                    </div>
                                </div>
                            </div>
                            

                        </div>
                    </div>
                </form>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('breadcrumb'); ?>
<section class="breadcrumbs-custom">
    <div class="breadcrumbs-custom-footer">
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="<?php echo e(sc_route('home')); ?>"><?php echo e(trans('front.home')); ?></a></li>
            <li class="active"><?php echo e($title ?? ''); ?></li>
          </ul>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>



<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
    <?php $__currentLoopData = $totalMethod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $plugin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(view()->exists($plugin['pathPlugin'].'::script')): ?>
            <?php echo $__env->make($plugin['pathPlugin'].'::script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    function updateCart(obj){
        let new_qty = obj.val();
        let storeId = obj.data('store_id');
        let rowid = obj.data('rowid');
        let id = obj.data('id');
        $.ajax({
            url: '<?php echo e(sc_route('cart.update')); ?>',
            type: 'POST',
            dataType: 'json',
            async: false,
            cache: false,
            data: {
                id: id,
                rowId: rowid,
                new_qty: new_qty,
                storeId: storeId,
                _token:'<?php echo e(csrf_token()); ?>'},
            success: function(data){
                error= parseInt(data.error);
                if(error ===0)
                {
                    window.location.replace(location.href);
                }else{
                    $('.item-qty-'+id).css('display','block').html(data.msg);
                }

                }
        });
    }

    function buttonQty(obj, action){
        var parent = obj.parent();
        var input = parent.find(".item-qty");
        if(action === 'reduce'){
            input.val(parseInt(input.val()) - 1);
        }else{
            input.val(parseInt(input.val()) + 1);
        }
        updateCart(input)
    }

    $('#button-form-process').click(function(){
        $('#form-process').submit();
        $(this).prop('disabled',true);
    });

    $('#addressList').change(function(){
        var id = $('#addressList').val();
        if(!id) {
            return;   
        } else if(id == 'new') {
            $('#form-process [name="first_name"]').val('');
            $('#form-process [name="last_name"]').val('');
            $('#form-process [name="phone"]').val('');
            $('#form-process [name="postcode"]').val('');
            $('#form-process [name="company"]').val('');
            $('#form-process [name="country"]').val('');
            $('#form-process [name="address1"]').val('');
            $('#form-process [name="address2"]').val('');
        } else {
            $.ajax({
            url: '<?php echo e(sc_route('customer.address_detail')); ?>',
            type: 'POST',
            dataType: 'json',
            async: false,
            cache: false,
            data: {
                id: id,
                _token:'<?php echo e(csrf_token()); ?>'},
            success: function(data){
                error= parseInt(data.error);
                if(error === 1)
                {
                    alert(data.msg);
                }else{
                    $('#form-process [name="first_name"]').val(data.first_name);
                    $('#form-process [name="last_name"]').val(data.last_name);
                    $('#form-process [name="phone"]').val(data.phone);
                    $('#form-process [name="postcode"]').val(data.postcode);
                    $('#form-process [name="company"]').val(data.company);
                    $('#form-process [name="country"]').val(data.country);
                    $('#form-process [name="address1"]').val(data.address1);
                    $('#form-process [name="address2"]').val(data.address2);
                }

                }
        });
        }
    });

</script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('styles'); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make($sc_templatePath.'.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/automobile.in/resources/views/templates/s-cart-light/screen/shop_cart.blade.php ENDPATH**/ ?>