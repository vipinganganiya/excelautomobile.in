<!--main right-->
<div class="col-12">
    <div class="sc-notice">
        <?php if(Session::has('message') || Session::has('status')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?php echo Session::get('message'); ?>

            <?php echo Session::get('status'); ?>

        </div>
        <?php endif; ?>

        <?php if(Session::has('success')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?php echo Session::get('success'); ?>

        </div>
        <?php endif; ?>

        <?php if(Session::has('error')): ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?php echo Session::get('error'); ?>

        </div>
        <?php endif; ?>

        <?php if(Session::has('warning')): ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?php echo Session::get('warning'); ?>

        </div>
        <?php endif; ?>

    </div>
</div>
<!--//main right-->
<?php /**PATH /var/www/automobile.in/resources/views/templates/s-cart-light/common/notice.blade.php ENDPATH**/ ?>