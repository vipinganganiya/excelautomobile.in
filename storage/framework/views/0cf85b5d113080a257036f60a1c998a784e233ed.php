<?php $__env->startSection('main'); ?>
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
                <div class="card-header with-border">
                    <h2 class="card-title"><?php echo e($title_description??''); ?></h2>

                    <div class="card-tools">
                        <div class="btn-group float-right mr_5">
                            <a href="<?php echo e(sc_route('admin_customer.index')); ?>" class="btn  btn-flat btn-default" title="List"><i class="fa fa-list"></i><span class="hidden-xs"> <?php echo e(trans('admin.back_list')); ?></span></a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="<?php echo e($url_action); ?>" method="post" accept-charset="UTF-8" class="form-horizontal" id="form-main"  enctype="multipart/form-data">


                    <div class="card-body">
                            <?php if(sc_config_admin('customer_lastname')): ?>
                            <div class="form-group row <?php echo e($errors->has('first_name') ? ' text-red' : ''); ?>">
                                <label for="first_name"
                                    class="col-sm-2 col-form-label"><?php echo e(trans('account.first_name')); ?></label>
    
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                        </div>
                                    <input id="first_name" type="text" class="form-control" name="first_name"
                                        value="<?php echo e((old('first_name', $customer['first_name'] ?? ''))); ?>">
                                    </div>
                                    <?php if($errors->has('first_name')): ?>
                                    <span class="form-text"><?php echo e($errors->first('first_name')); ?></span>
                                    <?php endif; ?>
    
                                </div>
                            </div>
                            <div class="form-group row <?php echo e($errors->has('last_name') ? ' text-red' : ''); ?>">
                                <label for="last_name"
                                    class="col-sm-2 col-form-label"><?php echo e(trans('account.last_name')); ?></label>
    
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                        </div>
                                    <input id="last_name" type="text" class="form-control" name="last_name"
                                        value="<?php echo e((old('last_name', $customer['last_name'] ?? ''))); ?>">
                                    </div>
                                    <?php if($errors->has('last_name')): ?>
                                    <span class="form-text"><?php echo e($errors->first('last_name')); ?></span>
                                    <?php endif; ?>
    
                                </div>
                            </div>
                            <?php else: ?>
                            <div class="form-group row <?php echo e($errors->has('first_name') ? ' text-red' : ''); ?>">
                                <label for="first_name"
                                    class="col-sm-2 col-form-label"><?php echo e(trans('account.name')); ?></label>
    
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                        </div>
                                    <input id="first_name" type="text" class="form-control" name="first_name"
                                        value="<?php echo e((old('first_name', $customer['first_name'] ?? ''))); ?>">
                                    </div>
                                    <?php if($errors->has('first_name')): ?>
                                    <span class="form-text"><?php echo e($errors->first('first_name')); ?></span>
                                    <?php endif; ?>
    
                                </div>
                            </div>
                            <?php endif; ?>
    
                            <?php if(sc_config_admin('customer_name_kana')): ?>
                            <div class="form-group row <?php echo e($errors->has('first_name_kana') ? ' text-red' : ''); ?>">
                                <label for="first_name_kana"
                                    class="col-sm-2 col-form-label"><?php echo e(trans('account.first_name_kana')); ?></label>
    
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                        </div>
                                    <input id="first_name_kana" type="text" class="form-control" name="first_name_kana"
                                        value="<?php echo e((old('first_name_kana', $customer['first_name_kana'] ?? ''))); ?>">
                                    </div>
                                    <?php if($errors->has('first_name_kana')): ?>
                                    <span class="form-text"><?php echo e($errors->first('first_name_kana')); ?></span>
                                    <?php endif; ?>
    
                                </div>
                            </div>
                            <div class="form-group row <?php echo e($errors->has('last_name_kana') ? ' text-red' : ''); ?>">
                                <label for="last_name_kana"
                                    class="col-sm-2 col-form-label"><?php echo e(trans('account.last_name_kana')); ?></label>
    
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                        </div>
                                    <input id="last_name_kana" type="text" class="form-control" name="last_name_kana"
                                        value="<?php echo e((old('last_name_kana', $customer['last_name_kana'] ?? ''))); ?>">
                                    </div>
                                    <?php if($errors->has('last_name_kana')): ?>
                                    <span class="form-text"><?php echo e($errors->first('last_name_kana')); ?></span>
                                    <?php endif; ?>
    
                                </div>
                            </div>
                            <?php endif; ?>


                            <?php if(sc_config_admin('customer_phone')): ?>
                            <div class="form-group row <?php echo e($errors->has('phone') ? ' text-red' : ''); ?>">
                                <label for="phone"
                                    class="col-sm-2 col-form-label"><?php echo e(trans('account.phone')); ?></label>
    
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                        </div>
                                    <input id="phone" type="text" class="form-control" name="phone"
                                        value="<?php echo e((old('phone', $customer['phone'] ?? ''))); ?>">
                                    </div>
                                    <?php if($errors->has('phone')): ?>
                                    <span class="form-text"><?php echo e($errors->first('phone')); ?></span>
                                    <?php endif; ?>
    
                                </div>
                            </div>
                            <?php endif; ?>
    
                            <?php if(sc_config_admin('customer_postcode')): ?>
                            <div class="form-group row <?php echo e($errors->has('postcode') ? ' text-red' : ''); ?>">
                                <label for="postcode"
                                    class="col-sm-2 col-form-label"><?php echo e(trans('account.postcode')); ?></label>
    
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                        </div>
                                    <input id="postcode" type="text" class="form-control" name="postcode"
                                        value="<?php echo e((old('postcode', $customer['postcode'] ?? ''))); ?>">
                                    </div>
    
                                    <?php if($errors->has('postcode')): ?>
                                    <span class="form-text"><?php echo e($errors->first('postcode')); ?></span>
                                    <?php endif; ?>
    
                                </div>
                            </div>
                            <?php endif; ?>
    
                            <div class="form-group row <?php echo e($errors->has('email') ? ' text-red' : ''); ?>">
                                <label for="email"
                                    class="col-sm-2 col-form-label"><?php echo e(trans('account.email')); ?></label>
    
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                        </div>
                                    <input id="email" type="text" class="form-control" name="email"
                                        value="<?php echo e((old('email',$customer['email'] ?? ''))); ?>">
                                    </div>
    
                                    <?php if($errors->has('email')): ?>
                                    <span class="form-text"><?php echo e($errors->first('email')); ?></span>
                                    <?php endif; ?>
    
                                </div>
                            </div>
    
                            <?php if(sc_config_admin('customer_address2')): ?>
                            <div class="form-group row <?php echo e($errors->has('address1') ? ' text-red' : ''); ?>">
                                <label for="address1"
                                    class="col-sm-2 col-form-label"><?php echo e(trans('account.address1')); ?></label>
    
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                        </div>
                                    <input id="address1" type="text" class="form-control" name="address1"
                                        value="<?php echo e((old('address1', $customer['address1'] ?? ''))); ?>">
                                    </div>
                                    <?php if($errors->has('address1')): ?>
                                    <span class="form-text"><?php echo e($errors->first('address1')); ?></span>
                                    <?php endif; ?>
    
                                </div>
                            </div>
    
                            <div class="form-group row <?php echo e($errors->has('address2') ? ' text-red' : ''); ?>">
                                <label for="address2"
                                    class="col-sm-2 col-form-label"><?php echo e(trans('account.address2')); ?></label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                        </div>
                                    <input id="address2" type="text" class="form-control" name="address2"
                                        value="<?php echo e((old('address2', $customer['address2'] ?? ''))); ?>">
                                    </div>
                                    <?php if($errors->has('address2')): ?>
                                    <span class="form-text"><?php echo e($errors->first('address2')); ?></span>
                                    <?php endif; ?>
    
                                </div>
                            </div>
                            <?php else: ?>
                            <div class="form-group row <?php echo e($errors->has('address1') ? ' text-red' : ''); ?>">
                                <label for="address1"
                                    class="col-sm-2 col-form-label"><?php echo e(trans('account.address')); ?></label>
    
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                        </div>
                                    <input id="address1" type="text" class="form-control" name="address1"
                                        value="<?php echo e((old('address1', $customer['address1'] ?? ''))); ?>">
                                    </div>
                                    <?php if($errors->has('address1')): ?>
                                    <span class="form-text"><?php echo e($errors->first('address1')); ?></span>
                                    <?php endif; ?>
    
                                </div>
                            </div>
                            <?php endif; ?>
    
    
                            <?php if(sc_config_admin('customer_country')): ?>
                            <?php
                            $country = old('country', $customer['country'] ?? '');
                            ?>
    
                            <div class="form-group row <?php echo e($errors->has('country') ? ' text-red' : ''); ?>">
                                <label for="country"
                                    class="col-sm-2 col-form-label"><?php echo e(trans('account.country')); ?></label>
                                <div class="col-sm-8">
                                    <select class="form-control country" style="width: 100%;" name="country">
                                        <option>__<?php echo e(trans('account.country')); ?>__</option>
                                        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($k); ?>" <?php echo e(($country == $k) ? 'selected':''); ?>><?php echo e($v); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php if($errors->has('country')): ?>
                                    <span class="form-text">
                                        <?php echo e($errors->first('country')); ?>

                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php endif; ?>
    
                            <?php if(sc_config_admin('customer_sex')): ?>
                            <?php
                            $sex = old('sex', $customer['sex'] ?? 0);
                            ?>
                            <div class="form-group<?php echo e($errors->has('sex') ? ' text-red' : ''); ?>">
                                <label
                                    class="col-sm-2 validate account_input <?php echo e(($errors->has('sex'))?"input-error":""); ?>"><?php echo e(trans('account.sex')); ?>:
                                </label>
                                <div class="col-sm-8">
                                <label class="radio-inline"><input value="0" type="radio" name="sex"
                                        <?php echo e(($sex == 0)?'checked':''); ?>> <?php echo e(trans('account.sex_women')); ?></label>
                                <label class="radio-inline"><input value="1" type="radio" name="sex"
                                        <?php echo e(($sex == 1)?'checked':''); ?>> <?php echo e(trans('account.sex_men')); ?></label>
                                </div>
                                <?php if($errors->has('sex')): ?>
                                <span class="form-text">
                                    <?php echo e($errors->first('sex')); ?>

                                </span>
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>
    
                            <?php if(sc_config_admin('customer_birthday')): ?>
                            <div class="form-group row <?php echo e($errors->has('birthday') ? ' text-red' : ''); ?>">
                                <label for="birthday"
                                    class="col-sm-2 col-form-label">
                                    <?php echo e(trans('account.birthday')); ?></label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                        </div>
                                    <input type="date" id="birthday" data-date-format="YYYY-MM-DD" class="form-control"
                                        name="birthday"
                                        value="<?php echo e((old('birthday', $customer['birthday'] ?? ''))); ?>">
                                    </div>
                                    <?php if($errors->has('birthday')): ?>
                                    <span class="form-text"><?php echo e($errors->first('birthday')); ?></span>
                                    <?php endif; ?>
    
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if(sc_config_admin('customer_group')): ?>
                            <div class="form-group row <?php echo e($errors->has('group') ? ' text-red' : ''); ?>">
                                <label for="group"
                                    class="col-sm-2 col-form-label"><?php echo e(trans('account.group')); ?></label>
    
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                        </div>
                                    <input id="group" type="number" class="form-control" name="group"
                                        value="<?php echo e((old('group', $customer['group'] ?? ''))); ?>">
                                    </div>
    
                                    <?php if($errors->has('group')): ?>
                                    <span class="form-text"><?php echo e($errors->first('group')); ?></span>
                                    <?php endif; ?>
    
                                </div>
                            </div>
                            <?php endif; ?>


                            <div class="form-group  row <?php echo e($errors->has('password') ? ' text-red' : ''); ?>">
                                <label for="password" class="col-sm-2  col-form-label"><?php echo e(trans('customer.password')); ?></label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                        </div>
                                        <input type="text"   id="password" name="password" value="<?php echo e(old('password')??''); ?>" class="form-control password" placeholder="" />
                                    </div>
                                        <?php if($errors->has('password')): ?>
                                            <span class="form-text">
                                                <i class="fa fa-info-circle"></i> <?php echo e($errors->first('password')); ?>

                                            </span>
                                        <?php else: ?>
                                            <?php if($customer): ?>
                                                <span class="form-text">
                                                     <?php echo e(trans('customer.admin.keep_password')); ?>

                                                 </span>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group  row">
                                <label for="status" class="col-sm-2  col-form-label"><?php echo e(trans('customer.status')); ?></label>
                                <div class="col-sm-8">
                                    <input class="checkbox" type="checkbox" name="status"  <?php echo e(old('status',(empty($customer['status'])?0:1))?'checked':''); ?>>

                                </div>
                            </div>
                    </div>



                    <!-- /.card-body -->

                    <div class="card-footer row">
                            <?php echo csrf_field(); ?>
                        <div class="col-sm-2">
                        </div>

                        <div class="col-sm-8">
                            <div class="btn-group float-right">
                                <button type="submit" class="btn btn-primary"><?php echo e(trans('admin.submit')); ?></button>
                            </div>

                            <div class="btn-group pull-left">
                                <button type="reset" class="btn btn-warning"><?php echo e(trans('admin.reset')); ?></button>
                            </div>
                        </div>
                    </div>

                    <!-- /.card-footer -->
                </form>

            </div>

            <div class="card">
                <?php if(!empty($addresses)): ?>
                    <div class="card-header with-border">
                        <h2 class="card-title"><?php echo e(trans('account.address_list')); ?></h2>
                    </div>
                    <?php $__currentLoopData = $addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="list">
                        <?php if(sc_config_admin('customer_lastname')): ?>
                        <b><?php echo e(trans('account.first_name')); ?>:</b> <?php echo e($address['first_name']); ?><br>
                        <b><?php echo e(trans('account.last_name')); ?>:</b> <?php echo e($address['last_name']); ?><br>
                        <?php else: ?>
                        <b><?php echo e(trans('account.name')); ?>:</b> <?php echo e($address['first_name']); ?><br>
                        <?php endif; ?>
                        
                        <?php if(sc_config_admin('customer_phone')): ?>
                        <b><?php echo e(trans('account.phone')); ?>:</b> <?php echo e($address['phone']); ?><br>
                        <?php endif; ?>
            
                        <?php if(sc_config_admin('customer_postcode')): ?>
                        <b><?php echo e(trans('account.postcode')); ?>:</b> <?php echo e($address['postcode']); ?><br>
                        <?php endif; ?>
            
                        <?php if(sc_config_admin('customer_address2')): ?>
                        <b><?php echo e(trans('account.address1')); ?>:</b> <?php echo e($address['address1']); ?><br>
                        <b><?php echo e(trans('account.address2')); ?>:</b> <?php echo e($address['address2']); ?><br>
                        <?php else: ?>
                        <b><?php echo e(trans('account.address')); ?>:</b> <?php echo e($address['first_address1']); ?><br>
                        <?php endif; ?>
            
                        <?php if(sc_config_admin('customer_country')): ?>
                        <b><?php echo e(trans('account.country')); ?>:</b> <?php echo e($countries[$address['country']] ?? $address['country']); ?><br>
                        <?php endif; ?>
            
                        <span class="btn">
                            <a title="<?php echo e(trans('account.addresses.edit')); ?>" href="<?php echo e(sc_route('admin_customer.update_address', ['id' => $address->id])); ?>"><i class="fa fa-edit"></i></a>
                        </span>
                        <span class="btn">
                            <a href="#" title="<?php echo e(trans('account.addresses.delete')); ?>" class="delete-address" data-id="<?php echo e($address->id); ?>"><i class="fa fa-trash"></i></a>
                        </span>
                        <?php if($address->id == $customer['address_id']): ?>
                        <span class="btn" title="<?php echo e(trans('account.addresses.default')); ?>"><i class="fa fa-university" aria-hidden="true"></i></span>
                        <?php endif; ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>


        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .list{
        padding: 5px;
        margin: 5px;
        border-bottom: 1px solid #dcc1c1;
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    $('.delete-address').click(function(){
      var r = confirm("<?php echo e(trans('account.confirm_delete')); ?>");
      if(!r) {
        return;
      }
      var id = $(this).data('id');
      $.ajax({
              url:'<?php echo e(route("admin_customer.delete_address")); ?>',
              type:'POST',
              dataType:'json',
              data:{id:id,"_token": "<?php echo e(csrf_token()); ?>"},
                  beforeSend: function(){
                  $('#loading').show();
              },
              success: function(data){
                if(data.error == 0) {
                  location.reload();
                }
              }
          });
    });
  </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make($templatePathAdmin.'layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/automobile.in/vendor/s-cart/core/src/Admin/Views/screen/customer_add.blade.php ENDPATH**/ ?>