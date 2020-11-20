<?php $__env->startSection('main'); ?>
   <div class="row">
      <div class="col-md-12">
         <div class="card">
                <div class="card-header with-border">
                    <h2 class="card-title"><?php echo e($title_description??''); ?></h2>

                    <div class="card-tools">
                        <div class="btn-group float-right mr-5">
                            <a href="<?php echo e(sc_route('admin_user.index')); ?>" class="btn  btn-flat btn-default" title="List"><i class="fa fa-list"></i><span class="hidden-xs"> <?php echo e(trans('admin.back_list')); ?></span></a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="<?php echo e($url_action); ?>" method="post" accept-charset="UTF-8" class="form-horizontal" id="form-main"  enctype="multipart/form-data">


                    <div class="card-body">
                        <div class="fields-group">

                            <div class="form-group  row <?php echo e($errors->has('name') ? ' text-red' : ''); ?>">
                                <label for="name" class="col-sm-2  control-label"><?php echo e(trans('user.name')); ?></label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                        </div>
                                        <input type="text"   id="name" name="name" value="<?php echo e(old('name',$user['name']??'')); ?>" class="form-control name" placeholder="" />
                                    </div>
                                        <?php if($errors->has('name')): ?>
                                            <span class="form-text">
                                                <i class="fa fa-info-circle"></i> <?php echo e($errors->first('name')); ?>

                                            </span>
                                        <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group  row <?php echo e($errors->has('username') ? ' text-red' : ''); ?>">
                                <label for="username" class="col-sm-2  control-label"><?php echo e(trans('user.user_name')); ?></label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                        </div>
                                        <input type="text" disabled=""  id="username"  value="<?php echo e(old('username',$user['username']??'')); ?>" class="form-control username" placeholder="" />
                                    </div>
                                        <?php if($errors->has('username')): ?>
                                            <span class="form-text">
                                                <i class="fa fa-info-circle"></i> <?php echo e($errors->first('username')); ?>

                                            </span>
                                        <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group  row <?php echo e($errors->has('email') ? ' text-red' : ''); ?>">
                                <label for="email" class="col-sm-2  control-label"><?php echo e(trans('user.email')); ?></label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                        </div>
                                        <input type="text" disabled=""  id="email"  value="<?php echo e(old('email',$user['email']??'')); ?>" class="form-control email" placeholder="" />
                                    </div>
                                        <?php if($errors->has('email')): ?>
                                            <span class="form-text">
                                                <i class="fa fa-info-circle"></i> <?php echo e($errors->first('email')); ?>

                                            </span>
                                        <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group  row <?php echo e($errors->has('avatar') ? ' text-red' : ''); ?>">
                                <label for="avatar" class="col-sm-2  control-label"><?php echo e(trans('user.avatar')); ?></label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" id="avatar" name="avatar" value="<?php echo e(old('avatar',$user['avatar']??'')); ?>" class="form-control input-sm avatar" placeholder=""  />
                                       <span class="input-group-btn">
                                         <a data-input="avatar" data-preview="preview_avatar" data-type="avatar" class="btn btn-primary lfm">
                                           <i class="fa fa-image"></i> <?php echo e(trans('product.admin.choose_image')); ?>

                                         </a>
                                       </span>
                                    </div>
                                        <?php if($errors->has('avatar')): ?>
                                            <span class="form-text">
                                                <i class="fa fa-info-circle"></i> <?php echo e($errors->first('avatar')); ?>

                                            </span>
                                        <?php endif; ?>
                                    <div id="preview_avatar" class="img_holder"><img src="<?php echo e(asset(old('avatar',$user['avatar']??''))); ?>"></div>
                                </div>
                            </div>

                            <div class="form-group  row <?php echo e($errors->has('password') ? ' text-red' : ''); ?>">
                                <label for="password" class="col-sm-2  control-label"><?php echo e(trans('user.password')); ?></label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                        </div>
                                        <input type="password"   id="password" name="password" value="<?php echo e(old('password')??''); ?>" class="form-control password" placeholder="" />
                                    </div>
                                        <?php if($errors->has('password')): ?>
                                            <span class="form-text">
                                                <i class="fa fa-info-circle"></i> <?php echo e($errors->first('password')); ?>

                                            </span>
                                        <?php else: ?>
                                            <?php if($user): ?>
                                                <span class="form-text">
                                                    <i class="fa fa-info-circle"></i> <?php echo e(trans('user.admin.keep_password')); ?>

                                                 </span>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group  row <?php echo e($errors->has('password_confirmation') ? ' text-red' : ''); ?>">
                                <label for="password" class="col-sm-2  control-label"><?php echo e(trans('user.password_confirmation')); ?></label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                        </div>
                                        <input type="password"   id="password_confirmation" name="password_confirmation" value="<?php echo e(old('password_confirmation')??''); ?>" class="form-control password_confirmation" placeholder="" />
                                    </div>
                                        <?php if($errors->has('password_confirmation')): ?>
                                            <span class="form-text">
                                                <i class="fa fa-info-circle"></i> <?php echo e($errors->first('password_confirmation')); ?>

                                            </span>
                                        <?php else: ?>
                                            <?php if($user): ?>
                                                <span class="form-text">
                                                    <i class="fa fa-info-circle"></i> <?php echo e(trans('user.admin.keep_password')); ?>

                                                 </span>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                </div>
                            </div>


                            <div class="form-group row <?php echo e($errors->has('roles') ? ' text-red' : ''); ?>">
        <?php
        $listRoles = [];
            $old_roles = old('roles',($user)?$user->roles->pluck('id')->toArray():'');
            if(is_array($old_roles)){
                foreach($old_roles as $value){
                    $listRoles[] = (int)$value;
                }
            }
        ?>
                                <label for="roles" class="col-sm-2  control-label"><?php echo e(trans('user.admin.select_roles')); ?></label>
                                <div class="col-sm-8">
                                    <?php if(count($listRoles)): ?>
                                        <?php $__currentLoopData = $listRoles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo '<span class="badge badge-primary">'.($roles[$role]??'').'</span>'; ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>
                            </div>



                            <div class="form-group row <?php echo e($errors->has('permission') ? ' text-red' : ''); ?>">
        <?php
        $listPermission = [];
        $old_permission = old('permission',($user?$user->permissions->pluck('id')->toArray():''));
            if(is_array($old_permission)){
                foreach($old_permission as $value){
                    $listPermission[] = (int)$value;
                }
            }
        ?>
                                <label for="permission" class="col-sm-2  control-label"><?php echo e(trans('user.admin.select_permission')); ?></label>
                                <div class="col-sm-8">
                                    <?php if(count($listPermission)): ?>
                                        <?php $__currentLoopData = $listPermission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo '<span class="badge badge-primary">'.($permission[$p]??'').'</span>'; ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>
                            </div>


                        </div>
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
</script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make($templatePathAdmin.'layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/automobile.in/vendor/s-cart/core/src/Admin/Views/auth/setting.blade.php ENDPATH**/ ?>