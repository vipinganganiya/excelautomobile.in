<script type="text/javascript">
  function formatNumber (num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
  }
  $('#shipping').change(function(){
    $('#total').html(formatNumber(parseInt(<?php echo e(Cart::subtotal()); ?>)+ parseInt($('#shipping').val())));
  });
</script>

<script src="<?php echo e(asset('js/sweetalert2.all.min.js')); ?>"></script>
<script>
      function alertJs(type = 'error', msg = '') {
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
      Toast.fire({
        type: type,
        title: msg
      })
    }

    function alertMsg(type = 'error', msg = '', note = '') {
      const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
        },
        buttonsStyling: true,
      });
      swalWithBootstrapButtons.fire(
        msg,
        note,
        type
      )
    }
</script>

<!--process cart-->
<script type="text/javascript">
  function addToCartAjax(id, instance = null, storeId = null){
    $.ajax({
        url: "<?php echo e(sc_route('cart.add_ajax')); ?>",
        type: "POST",
        dataType: "JSON",
        data: {
          "id": id,
          "instance":instance,
          "storeId":storeId,
          "_token":"<?php echo e(csrf_token()); ?>"
        },
        async: false,
        success: function(data){
          // console.log(data);
            error = parseInt(data.error);
            if(error ==0)
            {
              setTimeout(function () {
                if(data.instance =='default'){
                  $('.sc-cart').html(data.count_cart);
                }else{
                  $('.sc-'+data.instance).html(data.count_cart);
                }
              }, 1000);
              alertJs('success', data.msg);
            }else{
              if(data.redirect){
                window.location.replace(data.redirect);
                return;
              }
              alertJs('error', data.msg);
            }

            }
    });
  }
</script>
<!--//end cart -->


<!--message-->
<?php if(Session::has('success')): ?>
<script type="text/javascript">
    alertJs('success', '<?php echo Session::get('success'); ?>');
</script>
<?php endif; ?>

<?php if(Session::has('error')): ?>
<script type="text/javascript">
  alertJs('error', '<?php echo Session::get('error'); ?>');
</script>
<?php endif; ?>

<?php if(Session::has('warning')): ?>
<script type="text/javascript">
  alertJs('error', '<?php echo Session::get('warning'); ?>');
</script>
<?php endif; ?>
<!--//message-->
<?php /**PATH /var/www/automobile.in/resources/views/templates/s-cart-light/common/js.blade.php ENDPATH**/ ?>