<?php $__env->startSection('main'); ?>
<?php echo $__env->make($templatePathAdmin.'component.css_login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body class="hold-transition login-page">
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 main-login">
        <form action="<?php echo e(sc_route('admin.login')); ?>" method="post">
          <div class="col-md-12">
            <img src="<?php echo e(asset(sc_store('logo'))); ?>" alt="logo" class="logo">
          </div>
          <div class="login-title-des col-md-12 p-b-41">
            <a><b><?php echo e(sc_config_admin('ADMIN_NAME')); ?></b></a>
          </div>
          <div class="col-md-12 form-group has-feedback <?php echo !$errors->has('username') ?: 'text-red'; ?>">
            <div class="wrap-input100 validate-input form-group ">
              <input class="input100 form-control" type="text" placeholder="<?php echo e(trans('admin.username')); ?>"
                name="username" value="<?php echo e(old('username')); ?>">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-user"></i>
              </span>
              <?php if($errors->has('username')): ?>
              <?php $__currentLoopData = $errors->get('username'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i><?php echo e($message); ?></label><br>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-md-12 form-group has-feedback <?php echo !$errors->has('password') ?: 'text-red'; ?>">
            <div class="wrap-input100 validate-input form-group ">
              <input class="input100 form-control" type="password" placeholder="<?php echo e(trans('admin.password')); ?>"
                name="password">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-lock"></i>
              </span>

              <?php if($errors->has('password')): ?>
              <?php $__currentLoopData = $errors->get('password'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i><?php echo e($message); ?></label><br>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-md-12">
            <div class="container-login-btn">
              <button class="login-btn" type="submit">
                <?php echo e(trans('admin.login')); ?>

              </button>
            </div>
            

            <div class="checkbox input text-center remember">
              <label>
                <input class="checkbox" type="checkbox" name="remember" value="1"
                  <?php echo e((old('remember')) ? 'checked' : ''); ?>>
                <b><?php echo e(trans('admin.remember_me')); ?></b>
              </label>
            </div>

          </div>
          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        </form>
      </div>
    </div>

    <?php $__env->stopSection(); ?>


    <?php $__env->startPush('styles'); ?>
    <style type="text/css">
      .container-login100 {
        background-image: url(<?php echo asset('images/bg-system.jpg'); ?>);
      }
    </style>
    <?php $__env->stopPush(); ?>

    <?php $__env->startPush('scripts'); ?>
    <script>
      $(function () {
        $('.checkbox').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' /* optional */
        });
      });
    </script>
    <?php $__env->stopPush(); ?>
<?php echo $__env->make($templatePathAdmin.'layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/excelautomobile.in/resources/views/admin/auth/login.blade.php ENDPATH**/ ?>