<?php $__env->startSection('main'); ?>
   <div class="row">
      <div class="col-md-12">
         <div class="card">
                <div class="card-header with-border">
                    <h2 class="card-title"><?php echo e($title_description??''); ?></h2>

                    <div class="card-tools">
                        <div class="btn-group float-right" style="margin-right: 5px">
                            <a href="<?php echo e(sc_route('admin_order.index')); ?>" class="btn  btn-flat btn-default" title="List"><i class="fa fa-list"></i><span class="hidden-xs"> <?php echo e(trans('admin.back_list')); ?></span></a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="<?php echo e(sc_route('admin_order.create')); ?>" method="post" accept-charset="UTF-8" class="form-horizontal" id="form-main">

                    <div class="card-body">

                            <div class="form-group row <?php echo e($errors->has('user_id') ? ' text-red' : ''); ?>">
                                <label for="user_id" class="col-sm-2 asterisk col-form-label"><?php echo e(trans('order.select_customer')); ?></label>
                                <div class="col-sm-8">
                                    <select class="form-control user_id " style="width: 100%;" name="user_id" >
                                        <option value=""></option>
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($k); ?>" <?php echo e((old('user_id') ==$k) ? 'selected':''); ?>><?php echo e($v->name.'<'.$v->email.'>'); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                        <?php if($errors->has('user_id')): ?>
                                            <span class="text-sm">
                                                <?php echo e($errors->first('user_id')); ?>

                                            </span>
                                        <?php endif; ?>
                                </div>
                            </div>

                            <input type="hidden" name="email" id="email">

                            <div class="form-group row <?php echo e($errors->has('first_name') ? ' text-red' : ''); ?>">
                                <label for="first_name" class="col-sm-2 col-form-label"><?php echo e(trans('order.shipping_first_name')); ?></label>
                                <div class="col-sm-8">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                        </div>
                                        <input type="text" id="first_name" name="first_name" value="<?php echo old('first_name'); ?>" class="form-control first_name" placeholder="" />
                                    </div>
                                        <?php if($errors->has('first_name')): ?>
                                            <span class="text-sm">
                                                <?php echo e($errors->first('first_name')); ?>

                                            </span>
                                        <?php endif; ?>
                                </div>
                            </div>

                        <?php if(sc_config_admin('customer_lastname')): ?>
                            <div class="form-group row <?php echo e($errors->has('last_name') ? ' text-red' : ''); ?>">
                                <label for="last_name" class="col-sm-2 col-form-label"><?php echo e(trans('order.shipping_last_name')); ?></label>
                                <div class="col-sm-8">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                        </div>
                                        <input type="text" id="last_name" name="last_name" value="<?php echo old('last_name'); ?>" class="form-control last_name" placeholder="" />
                                    </div>
                                        <?php if($errors->has('last_name')): ?>
                                            <span class="text-sm">
                                                <?php echo e($errors->first('last_name')); ?>

                                            </span>
                                        <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if(sc_config_admin('customer_name_kana')): ?>
                            <div class="form-group row <?php echo e($errors->has('first_name_kana') ? ' text-red' : ''); ?>">
                                <label for="first_name_kana" class="col-sm-2 col-form-label"><?php echo e(trans('order.shipping_first_name_kana')); ?></label>
                                <div class="col-sm-8">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                        </div>
                                        <input type="text" id="first_name_kana" name="first_name_kana" value="<?php echo old('first_name_kana'); ?>" class="form-control first_name_kana" placeholder="" />
                                    </div>
                                        <?php if($errors->has('first_name_kana')): ?>
                                            <span class="text-sm">
                                                <?php echo e($errors->first('first_name_kana')); ?>

                                            </span>
                                        <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row <?php echo e($errors->has('last_name_kana') ? ' text-red' : ''); ?>">
                                <label for="last_name_kana" class="col-sm-2 col-form-label"><?php echo e(trans('order.shipping_last_name_kana')); ?></label>
                                <div class="col-sm-8">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                        </div>
                                        <input type="text" id="last_name_kana" name="last_name_kana" value="<?php echo old('last_name_kana'); ?>" class="form-control last_name_kana" placeholder="" />
                                    </div>
                                        <?php if($errors->has('last_name_kana')): ?>
                                            <span class="text-sm">
                                                <?php echo e($errors->first('last_name_kana')); ?>

                                            </span>
                                        <?php endif; ?>
                                </div>
                            </div>

                        <?php endif; ?>

                        <?php if(sc_config_admin('customer_company')): ?>
                            <div class="form-group row <?php echo e($errors->has('company') ? ' text-red' : ''); ?>">
                                <label for="company" class="col-sm-2 col-form-label"><?php echo e(trans('order.company')); ?></label>
                                <div class="col-sm-8">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                        </div>
                                        <input type="text" id="company" name="company" value="<?php echo old('company'); ?>" class="form-control company" placeholder="" />
                                    </div>
                                        <?php if($errors->has('company')): ?>
                                            <span class="text-sm">
                                                <?php echo e($errors->first('company')); ?>

                                            </span>
                                        <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if(sc_config_admin('customer_postcode')): ?>
                            <div class="form-group row <?php echo e($errors->has('postcode') ? ' text-red' : ''); ?>">
                                <label for="postcode" class="col-sm-2 col-form-label"><?php echo e(trans('order.postcode')); ?></label>
                                <div class="col-sm-8">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                        </div>
                                        <input type="text" id="postcode" name="postcode" value="<?php echo old('postcode'); ?>" class="form-control postcode" placeholder="" />
                                    </div>
                                        <?php if($errors->has('postcode')): ?>
                                            <span class="text-sm">
                                                <?php echo e($errors->first('postcode')); ?>

                                            </span>
                                        <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                            <div class="form-group row <?php echo e($errors->has('address1') ? ' text-red' : ''); ?>">
                                <label for="address1" class="col-sm-2 col-form-label"><?php echo e(trans('order.shipping_address1')); ?></label>
                                <div class="col-sm-8">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                        </div>
                                        <input type="text" id="address1" name="address1" value="<?php echo old('address1'); ?>" class="form-control address1" placeholder="" />
                                    </div>
                                    <?php if($errors->has('address1')): ?>
                                        <span class="text-sm">
                                            <?php echo e($errors->first('address1')); ?>

                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                        <?php if(sc_config_admin('customer_address2')): ?>    
                            <div class="form-group row <?php echo e($errors->has('address2') ? ' text-red' : ''); ?>">
                                <label for="address2" class="col-sm-2 col-form-label"><?php echo e(trans('order.shipping_address2')); ?></label>
                                <div class="col-sm-8">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                        </div>
                                        <input type="text" id="address2" name="address2" value="<?php echo old('address2'); ?>" class="form-control address2" placeholder="" />
                                    </div>
                                        <?php if($errors->has('address2')): ?>
                                            <span class="text-sm">
                                                <?php echo e($errors->first('address2')); ?>

                                            </span>
                                        <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if(sc_config_admin('customer_country')): ?>
                            <div class="form-group row <?php echo e($errors->has('country') ? ' text-red' : ''); ?>">
                                <label for="country" class="col-sm-2 asterisk col-form-label"><?php echo e(trans('order.country')); ?></label>
                                <div class="col-sm-8">
                                    <select class="form-control country " style="width: 100%;" name="country" >
                                        <option value=""></option>
                                        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($k); ?>" <?php echo e((old('country') ==$k) ? 'selected':''); ?>><?php echo e($v); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                        <?php if($errors->has('country')): ?>
                                            <span class="text-sm">
                                                <?php echo e($errors->first('country')); ?>

                                            </span>
                                        <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if(sc_config_admin('customer_phone')): ?>
                            <div class="form-group row  <?php echo e($errors->has('phone') ? ' text-red' : ''); ?>">
                                <label for="phone" class="col-sm-2 col-form-label"><?php echo e(trans('order.shipping_phone')); ?></label>
                                <div class="col-sm-8">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-phone fa-fw"></i></span>
                                        </div>
                                        <input style="width: 150px" type="text" id="phone" name="phone" value="<?php echo old('phone'); ?>" class="form-control phone" placeholder="Input Phone" />
                                    </div>
                                        <?php if($errors->has('phone')): ?>
                                            <span class="text-sm">
                                                <?php echo e($errors->first('phone')); ?>

                                            </span>
                                        <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                            <div class="form-group row  <?php echo e($errors->has('currency') ? ' text-red' : ''); ?>">
                                <label for="currency" class="col-sm-2 asterisk col-form-label"><?php echo e(trans('order.currency')); ?></label>
                                <div class="col-sm-8">
                                    <select class="form-control currency " style="width: 100%;" name="currency" >
                                        <option value=""></option>
                                      <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($v->code); ?>" <?php echo e((old('currency') == $v->code) ? 'selected':''); ?>><?php echo e($v->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                        <?php if($errors->has('currency')): ?>
                                            <span class="text-sm">
                                                <?php echo e($errors->first('currency')); ?>

                                            </span>
                                        <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row  <?php echo e($errors->has('exchange_rate') ? ' text-red' : ''); ?>">
                                <label for="exchange_rate" class="col-sm-2 col-form-label"><?php echo e(trans('order.exchange_rate')); ?></label>
                                <div class="col-sm-8">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-money fw" aria-hidden="true"></i></span>
                                        </div>
                                        <input style="width: 150px" type="text" id="exchange_rate" name="exchange_rate" value="<?php echo old('exchange_rate'); ?>" class="form-control exchange_rate" placeholder="Input Exchange rate" />
                                    </div>
                                        <?php if($errors->has('exchange_rate')): ?>
                                            <span class="text-sm">
                                                <?php echo e($errors->first('exchange_rate')); ?>

                                            </span>
                                        <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="comment" class="col-sm-2 col-form-label"><?php echo e(trans('order.note')); ?></label>
                                <div class="col-sm-8">
                                    <textarea name="comment" class="form-control comment" rows="5" placeholder=""><?php echo old('comment'); ?></textarea>
                                </div>
                            </div>

                            <div class="form-group row  <?php echo e($errors->has('payment_method') ? ' text-red' : ''); ?>">
                                <label for="payment_method" class="col-sm-2 col-form-label"><?php echo e(trans('order.payment_method')); ?></label>
                                <div class="col-sm-8">
                                    <select class="form-control payment_method " style="width: 100%;" name="payment_method">
                                      <?php $__currentLoopData = $paymentMethod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($k); ?>" <?php echo e((old('payment_method') ==$k) ? 'selected':''); ?>><?php echo e(sc_language_render($v)); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                        <?php if($errors->has('payment_method')): ?>
                                            <span class="text-sm">
                                                <?php echo e($errors->first('payment_method')); ?>

                                            </span>
                                        <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row  <?php echo e($errors->has('shipping_method') ? ' text-red' : ''); ?>">
                                <label for="shipping_method" class="col-sm-2 col-form-label"><?php echo e(trans('order.shipping_method')); ?></label>
                                <div class="col-sm-8">
                                    <select class="form-control shipping_method " style="width: 100%;" name="shipping_method">
                                      <?php $__currentLoopData = $shippingMethod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($k); ?>" <?php echo e((old('shipping_method') ==$k) ? 'selected':''); ?>><?php echo e(sc_language_render($v)); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                        <?php if($errors->has('shipping_method')): ?>
                                            <span class="text-sm">
                                                <?php echo e($errors->first('shipping_method')); ?>

                                            </span>
                                        <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row  <?php echo e($errors->has('status') ? ' text-red' : ''); ?>">
                                <label for="status" class="col-sm-2 col-form-label"><?php echo e(trans('order.status')); ?></label>
                                <div class="col-sm-8">
                                    <select class="form-control status " style="width: 100%;" name="status">
                                      <?php $__currentLoopData = $orderStatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($k); ?>" <?php echo e((old('status') ==$k) ? 'selected':''); ?>><?php echo e($v); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                        <?php if($errors->has('status')): ?>
                                            <span class="text-sm">
                                                <?php echo e($errors->first('status')); ?>

                                            </span>
                                        <?php endif; ?>
                                </div>
                            </div>

                            <hr>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer row">
                            <?php echo csrf_field(); ?>
                            <div class="col-md-2">
                            </div>
        
                            <div class="col-md-8">
                                <div class="btn-group float-right">
                                    <button type="submit" class="btn btn-primary"><?php echo e(trans('admin.submit')); ?></button>
                                </div>
        
                                <div class="btn-group float-left">
                                    <button type="reset" class="btn btn-warning"><?php echo e(trans('admin.reset')); ?></button>
                                </div>
                            </div>
                    </div>

                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>


<script type="text/javascript">

$(document).ready(function() {
//Initialize Select2 Elements
$('.select2').select2()
});
$('[name="user_id"]').change(function(){
    addInfo();
});
$('[name="currency"]').change(function(){
    addExchangeRate();
});

function addExchangeRate(){
    var currency = $('[name="currency"]').val();
    var jsonCurrency = <?php echo $currenciesRate; ?>;
    $('[name="exchange_rate"]').val(jsonCurrency[currency]);
}

function addInfo(){
    id = $('[name="user_id"]').val();
    if(id){
       $.ajax({
            url : '<?php echo e(sc_route('admin_order.user_info')); ?>',
            type : "get",
            dateType:"application/json; charset=utf-8",
            data : {
                 id : id
            },
            beforeSend: function(){
                $('#loading').show();
            },
            success: function(result){
                var returnedData = JSON.parse(result);
                $('[name="first_name"]').val(returnedData.first_name);
                $('[name="last_name"]').val(returnedData.last_name);
                $('[name="first_name_kana"]').val(returnedData.first_name_kana);
                $('[name="last_name_kana"]').val(returnedData.last_name_kana);
                $('[name="address1"]').val(returnedData.address1);
                $('[name="address2"]').val(returnedData.address2);
                $('[name="email"]').val(returnedData.email);
                $('[name="phone"]').val(returnedData.phone);
                $('[name="company"]').val(returnedData.company);
                $('[name="postcode"]').val(returnedData.postcode);
                $('[name="country"]').val(returnedData.country).change();
                $('#loading').hide();
            }
        });
       }else{
            $('#form-main').reset();
       }

}

</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($templatePathAdmin.'layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/automobile.in/vendor/s-cart/core/src/Admin/Views/screen/order_add.blade.php ENDPATH**/ ?>