<?php
    $styleDefine = 'admin.theme_define.'.config('admin.theme_default');
?>
<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="<?php echo e(asset('images/icon.png')); ?>" type="image/png" sizes="16x16">
  <title><?php echo e(sc_config_admin('ADMIN_TITLE')); ?> | <?php echo e($title??''); ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('admin/LTE/plugins/fontawesome-free/css/all.min.css')); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo e(asset('admin/LTE/plugins/jqvmap/jqvmap.min.css')); ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo e(asset('admin/LTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo e(asset('admin/LTE/plugins/summernote/summernote-bs4.css')); ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo e(asset('admin/LTE/plugins/iCheck/square/blue.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('admin/LTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
  <?php if(!Admin::isLoginPage() && !Admin::isLogoutPage()): ?>
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo e(asset('admin/LTE/plugins/select2/css/select2.min.css')); ?>">
  <!-- Daterange picker -->
  
  <!-- Tempusdominus Bbootstrap 4 -->
  

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo e(asset('admin/LTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
  <!-- Theme style -->

  <?php echo $__env->make($templatePathAdmin.'component.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif; ?>

  <link rel="stylesheet" href="<?php echo e(asset('admin/LTE/dist/css/adminlte.min.css')); ?>">

  <?php echo $__env->yieldPushContent('styles'); ?>

</head>

<body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed <?php echo e(config($styleDefine.'.body')); ?>">

<div class="wrapper">
  <?php if((Admin::isLoginPage() || Admin::isLogoutPage())): ?>
    <?php echo $__env->yieldContent('main'); ?>
  <?php else: ?>
  <?php echo $__env->make($templatePathAdmin.'component.exception', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make($templatePathAdmin.'header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make($templatePathAdmin.'sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">
              <i class="<?php echo e($icon??''); ?>" aria-hidden="true"></i> <?php echo $title??''; ?>

              <?php if(!empty($subTitle)): ?>
              <span class="sub-title"><?php echo $subTitle; ?></span>
              <?php endif; ?>
            </h1>
            <div class="more_info"><?php echo $more_info??''; ?></div>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(sc_route('admin.home')); ?>"><i class="fa fa-home fa-1x"></i> <?php echo e(trans('admin.home')); ?></a></li>
              <?php if(!empty($breadcrumb)): ?>
              <li class="breadcrumb-item"><a href="<?php echo e($breadcrumb['url']); ?>"><?php echo e($breadcrumb['name']); ?></a></li>
              <?php endif; ?>
              <li class="breadcrumb-item active"><?php echo $title??''; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <?php echo $__env->yieldContent('main'); ?>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php echo $__env->make($templatePathAdmin.'footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->


  <div id="loading">
        <div id="overlay" class="overlay"><i class="fa fa-spinner fa-pulse fa-5x fa-fw "></i></div>
 </div>
<?php endif; ?>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo e(asset('admin/LTE/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(asset('admin/LTE/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('admin/LTE/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

<!-- JQVMap -->
<script src="<?php echo e(asset('admin/LTE/plugins/jqvmap/jquery.vmap.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/LTE/plugins/jqvmap/maps/jquery.vmap.usa.js')); ?>"></script>
<!-- daterangepicker -->

<!-- Tempusdominus Bootstrap 4 -->

<!-- Summernote -->
<script src="<?php echo e(asset('admin/LTE/plugins/summernote/summernote-bs4.min.js')); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo e(asset('admin/LTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>


<?php if(!Admin::isLoginPage() && !Admin::isLogoutPage()): ?>

<!-- Sparkline -->
<script src="<?php echo e(asset('admin/LTE/plugins/sparklines/sparkline.js')); ?>"></script>
<!-- FastClick -->
<script src="<?php echo e(asset('admin/LTE/plugins/fastclick/fastclick.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('admin/LTE/dist/js/adminlte.js')); ?>"></script>

<script src="<?php echo e(asset('admin/plugin/sweetalert2.all.min.js')); ?>"></script>

<!-- Select2 -->
<script src="<?php echo e(asset('admin/LTE/plugins/select2/js/select2.full.min.js')); ?>"></script>

<script src="<?php echo e(asset('admin/plugin/bootstrap-switch.min.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->

<?php endif; ?>
<script src="<?php echo e(asset('admin/LTE/plugins/iCheck/icheck.min.js')); ?>"></script>

<?php echo $__env->yieldPushContent('scripts'); ?>

<?php echo $__env->make($templatePathAdmin.'component.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make($templatePathAdmin.'component.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html><?php /**PATH /var/www/excelautomobile.in/resources/views/admin/layout.blade.php ENDPATH**/ ?>